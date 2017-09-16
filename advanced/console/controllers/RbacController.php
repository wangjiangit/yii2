<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;

class RbacController extends Controller
{


    public function actionInit()
    {


        //添加createPost权限
        $auth=Yii::$app->authManager;

        $a= $auth->checkAccess(2,'updatePost');
       // $a=$auth->getRolesByUser(1);
        var_dump($a);exit;
        $createPost=$auth->createPermission('createPost');
        $createPost->description='Create a post';
        $auth->add($createPost);

        //添加updatePost权限
        $updatePost=$auth->createPermission('updatePost');
        $updatePost->description='Update a post';
        $auth->add($updatePost);

        //添加author角色并赋予createPost权限
        $author=$auth->createRole('author');
        $author->description='i am author';
        $auth->add($author);
        $auth->addChild($author,$createPost);


        // 添加 "admin" 角色并赋予 "updatePost"
        // 和 "author" 权限
        $admin=$auth->createRole('admin');
        $admin->description='i am admin';
        $auth->add($admin);

        $auth->addChild($admin,$updatePost);
        $auth->addChild($admin,$author);

        // 为用户指派角色。其中 1 和 2 是由 IdentityInterface::getId() 返回的id （译者注：user表的id）
        // 通常在你的 User 模型中实现这个函数。

        $auth->assign($admin,1);
        $auth->assign($author,2);



    }


}

