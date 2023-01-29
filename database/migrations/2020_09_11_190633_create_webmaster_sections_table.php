<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebmasterSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webmaster_sections', function (Blueprint $table) {
            $table->id();
            $table->integer('row_no');

            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ch')->nullable();
            $table->string('title_hi')->nullable();
            $table->string('title_es')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_pt')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_th')->nullable();

            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('title_status')->default(1);
            $table->tinyInteger('photo_status')->default(1);
            $table->tinyInteger('case_status')->default(1);
            $table->tinyInteger('visits_status')->default(1);
            $table->tinyInteger('sections_status')->default(0);
            $table->tinyInteger('comments_status')->default(0);
            $table->tinyInteger('date_status')->default(0);
            $table->tinyInteger('expire_date_status')->default(0);
            $table->tinyInteger('longtext_status')->default(0);
            $table->tinyInteger('editor_status')->default(0);
            $table->tinyInteger('attach_file_status')->default(0);
            $table->tinyInteger('extra_attach_file_status')->default(0);
            $table->tinyInteger('multi_images_status')->default(0);
            $table->tinyInteger('section_icon_status')->default(0);
            $table->tinyInteger('icon_status')->default(0);
            $table->tinyInteger('maps_status')->default(0);
            $table->tinyInteger('order_status')->default(0);
            $table->tinyInteger('related_status')->default(0);
            $table->tinyInteger('status')->default(0);

            $table->string('seo_title_ar')->nullable();
            $table->string('seo_title_en')->nullable();
            $table->string('seo_title_ch')->nullable();
            $table->string('seo_title_hi')->nullable();
            $table->string('seo_title_es')->nullable();
            $table->string('seo_title_ru')->nullable();
            $table->string('seo_title_pt')->nullable();
            $table->string('seo_title_fr')->nullable();
            $table->string('seo_title_de')->nullable();
            $table->string('seo_title_th')->nullable();

            $table->string('seo_description_ar')->nullable();
            $table->string('seo_description_en')->nullable();
            $table->string('seo_description_ch')->nullable();
            $table->string('seo_description_hi')->nullable();
            $table->string('seo_description_es')->nullable();
            $table->string('seo_description_ru')->nullable();
            $table->string('seo_description_pt')->nullable();
            $table->string('seo_description_fr')->nullable();
            $table->string('seo_description_de')->nullable();
            $table->string('seo_description_th')->nullable();

            $table->string('seo_keywords_ar')->nullable();
            $table->string('seo_keywords_en')->nullable();
            $table->string('seo_keywords_ch')->nullable();
            $table->string('seo_keywords_hi')->nullable();
            $table->string('seo_keywords_es')->nullable();
            $table->string('seo_keywords_ru')->nullable();
            $table->string('seo_keywords_pt')->nullable();
            $table->string('seo_keywords_fr')->nullable();
            $table->string('seo_keywords_de')->nullable();
            $table->string('seo_keywords_th')->nullable();

            $table->string('seo_url_slug_ar')->nullable();
            $table->string('seo_url_slug_en')->nullable();
            $table->string('seo_url_slug_ch')->nullable();
            $table->string('seo_url_slug_hi')->nullable();
            $table->string('seo_url_slug_es')->nullable();
            $table->string('seo_url_slug_ru')->nullable();
            $table->string('seo_url_slug_pt')->nullable();
            $table->string('seo_url_slug_fr')->nullable();
            $table->string('seo_url_slug_de')->nullable();
            $table->string('seo_url_slug_th')->nullable();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webmaster_sections');
    }
}
