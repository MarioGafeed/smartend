<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\WebmasterSection;

class WebmasterSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Site pages
        $sections = new WebmasterSection();
        $sections->row_no = 1;

        $sections->title_ar = "صفحات الموقع";
        $sections->title_en = "Site pages";
        $sections->title_ch = "网站页面";
        $sections->title_hi = "साइट पेज";
        $sections->title_es = "Sitio Páginas";
        $sections->title_ru = "Страницы сайта";
        $sections->title_pt = "Site Páginas";
        $sections->title_fr = "Site Pages";
        $sections->title_de = "Seiten";
        $sections->title_th = "หน้าเว็บไซต์";

        $sections->seo_title_ar = "صفحات الموقع";
        $sections->seo_title_en = "Site pages";
        $sections->seo_title_ch = "网站页面";
        $sections->seo_title_hi = "साइट पेज";
        $sections->seo_title_es = "Sitio Páginas";
        $sections->seo_title_ru =  "Страницы сайта";
        $sections->seo_title_pt = "Site Páginas";
        $sections->seo_title_fr = "Site Pages";
        $sections->seo_title_de = "Seiten";
        $sections->seo_title_th = "หน้าเว็บไซต์";

        $sections->seo_url_slug_ar = "sitepages";
        $sections->seo_url_slug_en = "sitepages";
        $sections->seo_url_slug_ch = "sitepages";
        $sections->seo_url_slug_hi = "sitepages";
        $sections->seo_url_slug_es = "sitepages";
        $sections->seo_url_slug_ru = "sitepages";
        $sections->seo_url_slug_pt = "sitepages";
        $sections->seo_url_slug_fr = "sitepages";
        $sections->seo_url_slug_de = "sitepages";
        $sections->seo_url_slug_th = "sitepages";

        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 1;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 1;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Services
        $sections = new WebmasterSection();
        $sections->row_no = 2;

        $sections->title_ar = "الخدمات";
        $sections->title_en = "Services";
        $sections->title_ch = "服务";
        $sections->title_hi = "सेवाएं";
        $sections->title_es = "Servicios";
        $sections->title_ru = "Услуги";
        $sections->title_pt = "Serviços";
        $sections->title_fr = "services";
        $sections->title_de = "Dienstleistungen";
        $sections->title_th = "บริการ";

        $sections->seo_title_ar = "الخدمات";
        $sections->seo_title_en = "Services";
        $sections->seo_title_ch = "服务";
        $sections->seo_title_hi = "सेवाएं";
        $sections->seo_title_es = "Servicios";
        $sections->seo_title_ru = "Услуги";
        $sections->seo_title_pt = "Serviços";
        $sections->seo_title_fr = "services";
        $sections->seo_title_de = "Dienstleistungen";
        $sections->seo_title_th = "บริการ";

        $sections->seo_url_slug_ar = "services";
        $sections->seo_url_slug_en = "services";
        $sections->seo_url_slug_ch = "services";
        $sections->seo_url_slug_hi = "services";
        $sections->seo_url_slug_es = "services";
        $sections->seo_url_slug_ru = "services";
        $sections->seo_url_slug_pt = "services";
        $sections->seo_url_slug_fr = "services";
        $sections->seo_url_slug_de = "services";
        $sections->seo_url_slug_th = "services";

        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 1;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 1;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // News
        $sections = new WebmasterSection();
        $sections->row_no = 3;

        $sections->title_ar = "الأخبار";
        $sections->title_en = "News";
        $sections->title_ch = "新闻";
        $sections->title_hi = "समाचार";
        $sections->title_es = "Noticias";
        $sections->title_ru = "Новости";
        $sections->title_pt = "Notícia";
        $sections->title_fr = "Nouvelles";
        $sections->title_de = "Nieuws";
        $sections->title_th = "ข่าว";

        $sections->seo_title_ar = "الأخبار";
        $sections->seo_title_en = "News";
        $sections->seo_title_ch = "新闻";
        $sections->seo_title_hi = "समाचार";
        $sections->seo_title_es = "Noticias";
        $sections->seo_title_ru = "Новости";
        $sections->seo_title_pt = "Notícia";
        $sections->seo_title_fr = "Nouvelles";
        $sections->seo_title_de = "Nieuws";
        $sections->seo_title_th = "ข่าว";

        $sections->seo_url_slug_ar = "news";
        $sections->seo_url_slug_en = "news";
        $sections->seo_url_slug_ch = "news";
        $sections->seo_url_slug_hi = "news";
        $sections->seo_url_slug_es = "news";
        $sections->seo_url_slug_ru = "news";
        $sections->seo_url_slug_pt = "news";
        $sections->seo_url_slug_fr = "news";
        $sections->seo_url_slug_de = "news";
        $sections->seo_url_slug_th = "news";

        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 1;
        $sections->date_status = 1;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Photos
        $sections = new WebmasterSection();
        $sections->row_no = 4;

        $sections->title_ar = "الصور";
        $sections->title_en = "Photos";
        $sections->title_ch = "照片";
        $sections->title_hi = "तस्वीरें";
        $sections->title_es = "Fotos";
        $sections->title_ru = "Фото";
        $sections->title_pt = "Fotos";
        $sections->title_fr = "Photos";
        $sections->title_de = "Fotos";
        $sections->title_th = "照片";

        $sections->seo_title_ar = "الصور";
        $sections->seo_title_en = "Photos";
        $sections->seo_title_ch = "照片";
        $sections->seo_title_hi = "तस्वीरें";
        $sections->seo_title_es = "Fotos";
        $sections->seo_title_ru = "Фото";
        $sections->seo_title_pt = "Fotos";
        $sections->seo_title_fr = "Photos";
        $sections->seo_title_de = "Fotos";
        $sections->seo_title_th = "照片";

        $sections->seo_url_slug_ar = "photos";
        $sections->seo_url_slug_en = "photos";
        $sections->seo_url_slug_ch = "photos";
        $sections->seo_url_slug_hi = "photos";
        $sections->seo_url_slug_es = "photos";
        $sections->seo_url_slug_ru = "photos";
        $sections->seo_url_slug_pt = "photos";
        $sections->seo_url_slug_fr = "photos";
        $sections->seo_url_slug_de = "photos";
        $sections->seo_url_slug_th = "photos";

        $sections->type = 1;
        $sections->sections_status = 0;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Videos
        $sections = new WebmasterSection();
        $sections->row_no = 5;

        $sections->title_ar = "الفيديو";
        $sections->title_en = "Videos";
        $sections->title_ch = "视频";
        $sections->title_hi = "वीडियो";
        $sections->title_es = "Videos";
        $sections->title_ru = "Видео";
        $sections->title_pt = "Vídeos";
        $sections->title_fr = "Vidéos";
        $sections->title_de = "Videos";
        $sections->title_th = "วิดีโอ";

        $sections->seo_title_ar = "الفيديو";
        $sections->seo_title_en = "Videos";
        $sections->seo_title_ch = "视频";
        $sections->seo_title_hi = "वीडियो";
        $sections->seo_title_es = "Videos";
        $sections->seo_title_ru = "Видео";
        $sections->seo_title_pt = "Vídeos";
        $sections->seo_title_fr = "Vidéos";
        $sections->seo_title_de = "Videos";
        $sections->seo_title_th = "วิดีโอ";

        $sections->seo_url_slug_ar = "videos";
        $sections->seo_url_slug_en = "videos";
        $sections->seo_url_slug_ch = "videos";
        $sections->seo_url_slug_hi = "videos";
        $sections->seo_url_slug_es = "videos";
        $sections->seo_url_slug_ru = "videos";
        $sections->seo_url_slug_pt = "videos";
        $sections->seo_url_slug_fr = "videos";
        $sections->seo_url_slug_de = "videos";
        $sections->seo_url_slug_th = "videos";

        $sections->type = 2;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Sounds
        $sections = new WebmasterSection();
        $sections->row_no = 6;

        $sections->title_ar = "الصوتيات";
        $sections->title_en = "Audio";
        $sections->title_ch = "声音的";
        $sections->title_hi = "ऑडियो";
        $sections->title_es = "Audio";
        $sections->title_ru = "Аудио";
        $sections->title_pt = "Áudio";
        $sections->title_fr = "l'audio";
        $sections->title_de = "Audio";
        $sections->title_th = "เครื่องเสียง";

        $sections->seo_title_ar = "الصوتيات";
        $sections->seo_title_en = "Audio";
        $sections->seo_title_ch = "Audio";
        $sections->seo_title_hi = "ऑडियो";
        $sections->seo_title_es = "Audio";
        $sections->seo_title_ru = "Аудио";
        $sections->seo_title_pt = "Áudio";
        $sections->seo_title_fr = "l'audio";
        $sections->seo_title_de = "Audio";
        $sections->seo_title_th = "เครื่องเสียง";

        $sections->seo_url_slug_ar = "audio";
        $sections->seo_url_slug_en = "audio";
        $sections->seo_url_slug_ch = "audio";
        $sections->seo_url_slug_hi = "audio";
        $sections->seo_url_slug_es = "audio";
        $sections->seo_url_slug_ru = "audio";
        $sections->seo_url_slug_pt = "audio";
        $sections->seo_url_slug_fr = "audio";
        $sections->seo_url_slug_de = "audio";
        $sections->seo_url_slug_th = "audio";

        $sections->type = 3;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Articles
        $sections = new WebmasterSection();
        $sections->row_no = 7;

        $sections->title_ar = "المدونة";
        $sections->title_en = "Blog";
        $sections->title_ch = "博客";
        $sections->title_hi = "ब्लॉग";
        $sections->title_es = "Blog";
        $sections->title_ru = "Блог";
        $sections->title_pt = "Blog";
        $sections->title_fr = "Blog";
        $sections->title_de = "Blog";
        $sections->title_th = "บล็อก";

        $sections->seo_title_ar = "المدونة";
        $sections->seo_title_en = "Blog";
        $sections->seo_title_ch = "博客";
        $sections->seo_title_hi = "ब्लॉग";
        $sections->seo_title_es = "Blog";
        $sections->seo_title_ru = "Блог";
        $sections->seo_title_pt = "Blog";
        $sections->seo_title_fr = "Blog";
        $sections->seo_title_de = "Blog";
        $sections->seo_title_th = "บล็อก";

        $sections->seo_url_slug_ar = "blog";
        $sections->seo_url_slug_en = "blog";
        $sections->seo_url_slug_ch = "blog";
        $sections->seo_url_slug_hi = "blog";
        $sections->seo_url_slug_es = "blog";
        $sections->seo_url_slug_ru = "blog";
        $sections->seo_url_slug_pt = "blog";
        $sections->seo_url_slug_fr = "blog";
        $sections->seo_url_slug_de = "blog";
        $sections->seo_url_slug_th = "blog";

        $sections->type = 0;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 1;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Products
        $sections = new WebmasterSection();
        $sections->row_no = 8;

        $sections->title_ar = "المنتجات";
        $sections->title_en = "Products";
        $sections->title_ch = "产品";
        $sections->title_hi = "उत्पादों";
        $sections->title_es = "Productos";
        $sections->title_ru = "Товары";
        $sections->title_pt = "Produtos";
        $sections->title_fr = "Produits";
        $sections->title_de = "Produkte";
        $sections->title_th = "สินค้า";

        $sections->seo_title_ar = "المنتجات";
        $sections->seo_title_en = "Products";
        $sections->seo_title_ch = "产品";
        $sections->seo_title_hi = "उत्पादों";
        $sections->seo_title_es = "Productos";
        $sections->seo_title_ru = "Товары";
        $sections->seo_title_pt = "Produtos";
        $sections->seo_title_fr = "Produits";
        $sections->seo_title_de = "Produkte";
        $sections->seo_title_th = "สินค้า";

        $sections->seo_url_slug_ar = "products";
        $sections->seo_url_slug_en = "products";
        $sections->seo_url_slug_ch = "products";
        $sections->seo_url_slug_hi = "products";
        $sections->seo_url_slug_es = "products";
        $sections->seo_url_slug_ru = "products";
        $sections->seo_url_slug_pt = "products";
        $sections->seo_url_slug_fr = "products";
        $sections->seo_url_slug_de = "products";
        $sections->seo_url_slug_th = "products";

        $sections->type = 0;
        $sections->sections_status = 2;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 1;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 9;

        $sections->title_ar = "العملاء";
        $sections->title_en = "Partners";
        $sections->title_ch = "伙伴";
        $sections->title_hi = "भागीदारों";
        $sections->title_es = "Socias";
        $sections->title_ru = "Партнеры";
        $sections->title_pt = "Sócias";
        $sections->title_fr = "Les partenaires";
        $sections->title_de = "Partners";
        $sections->title_th = "พันธมิตร";

        $sections->seo_title_ar = "العملاء";
        $sections->seo_title_en = "Partners";
        $sections->seo_title_ch = "伙伴";
        $sections->seo_title_hi = "भागीदारों";
        $sections->seo_title_es = "Socias";
        $sections->seo_title_ru = "Партнеры";
        $sections->seo_title_pt = "Sócias";
        $sections->seo_title_fr = "Les partenaires";
        $sections->seo_title_de = "Partners";
        $sections->seo_title_th = "พันธมิตร";

        $sections->seo_url_slug_ar = "partners";
        $sections->seo_url_slug_en = "partners";
        $sections->seo_url_slug_ch = "partners";
        $sections->seo_url_slug_hi = "partners";
        $sections->seo_url_slug_es = "partners";
        $sections->seo_url_slug_ru = "partners";
        $sections->seo_url_slug_pt = "partners";
        $sections->seo_url_slug_fr = "partners";
        $sections->seo_url_slug_de = "partners";
        $sections->seo_url_slug_th = "partners";

        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

    }
}
