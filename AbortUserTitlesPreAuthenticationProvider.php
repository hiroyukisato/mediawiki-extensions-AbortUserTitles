<?php

use MediaWiki\Auth\AbstractPreAuthenticationProvider;
class AbortUserTitlesPreAuthenticationProvider  extends AbstractPreAuthenticationProvider{

    public function getAuthenticationRequests( $action, array $options ) {
        return [];
    }

    public function testForAccountCreation( $user, $creator, array $reqs ) {

        //作成したいユーザ名
        $username = $user->getName();

        //ページの存在を確認
        $isPage = Title::newFromText($username,NS_MAIN )->isKnown();

        if ($isPage) {
            //アカウント作成ブロック
            return Status::newFatal('abortusertitles-bad',$username);
        }

        //アクカウント作成
        return Status::newGood();
    }
}
