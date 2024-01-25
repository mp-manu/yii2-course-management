<?php

namespace app\components;

use app\models\Lesson;
use yii\base\Component;

class Helpers extends Component {

    public function lessonCount($learned) {
        return Lesson::find()->where(['learned' => $learned])->count();
    }
}