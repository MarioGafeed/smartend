<?php

namespace Database\Seeders;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Language = new Language;
        $Language->title = "English";
        $Language->code = "en";
        $Language->direction = "ltr";
        $Language->icon = "us";
        $Language->box_status = 1;
        $Language->left = "left";
        $Language->right = "right";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "العربية";
        $Language->code = "ar";
        $Language->direction = "rtl";
        $Language->icon = "sa";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "中文語言";
        $Language->code = "ch";
        $Language->direction = "ltr";
        $Language->icon = "cn";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "हिंदी भाषा";
        $Language->code = "hi";
        $Language->direction = "ltr";
        $Language->icon = "in";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "हespañol";
        $Language->code = "es";
        $Language->direction = "ltr";
        $Language->icon = "es";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "русский";
        $Language->code = "ru";
        $Language->direction = "ltr";
        $Language->icon = "ru";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "Português";
        $Language->code = "pt";
        $Language->direction = "ltr";
        $Language->icon = "pt";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "Le français";
        $Language->code = "fr";
        $Language->direction = "ltr";
        $Language->icon = "fr";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "Deutsch";
        $Language->code = "de";
        $Language->direction = "ltr";
        $Language->icon = "de";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "ภาษาไทย";
        $Language->code = "th";
        $Language->direction = "ltr";
        $Language->icon = "th";
        $Language->box_status = 1;
        $Language->left = "right";
        $Language->right = "left";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();
    }
}
