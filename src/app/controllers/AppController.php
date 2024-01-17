<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\PasswordResetRequestForm;
use app\models\ResendVerificationEmailForm;
use app\models\ResetPasswordForm;
use app\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\captcha\CaptchaAction;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\Response;

/**
 * Main application controller.
 * Handles all generic actions, site and user related.
 */
final class AppController extends Controller {

//    //TODO: Enable once  APP is pre-live
//    /**
//     * {@inheritdoc}
//     */
//    public function behaviors() {
//        return [
//            'access' => [
//                'class' => AccessControl::class,
//                'only' => ['logout', 'signup'],
//                'rules' => [
//                    ['actions' => ['logout'], 'allow' => true, 'roles' => ['@'],],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::class,
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex(): string {
        return $this->render('index');
    }

    public function actionLogin() {
//        //TODO: Example code, remove/rewrite
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);
    }

    /**
     * @return \yii\web\Response
     */
    public function actionLogout(): Response {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionProfile() {
        return '//TODO: Not implemented yet';
    }

    public function actionSettings() {
        return '//TODO: Not implemented yet';
    }

    public function actionDocumentation() {
        return '//TODO: Not implemented yet';
    }

    public function actionCopyright() {
        return '//TODO: Not implemented yet';
    }

    public function actionChangelog() {
        return '//TODO: Not implemented yet';
    }
}
