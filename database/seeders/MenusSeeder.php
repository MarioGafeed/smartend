<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Main Menu
        $Menu1 = new Menu();
        $Menu1->row_no = 1;
        $Menu1->father_id = 0;

        $Menu1->title_ar = "القائمة الرئيسية";
        $Menu1->title_en = "Main Menu";
        $Menu1->title_ch = "主菜单";
        $Menu1->title_hi = "मुख्य मेन्यू";
        $Menu1->title_es = "Menú principal";
        $Menu1->title_ru = "Главное меню";
        $Menu1->title_pt = "Menu principal";
        $Menu1->title_fr = "Menu principal";
        $Menu1->title_de = "Hauptmenü";
        $Menu1->title_th = "เมนูหลัก";

        $Menu1->status = 1;
        $Menu1->type = 0;
        $Menu1->cat_id = 0;
        $Menu1->link = "";
        $Menu1->created_by = 1;
        $Menu1->save();

        // Footer Menu
        $Menu2 = new Menu();
        $Menu2->row_no = 2;
        $Menu2->father_id = 0;

        $Menu2->title_ar = "روابط سريعة";
        $Menu2->title_en = "Quick Links";
        $Menu2->title_ch = "快速链接";
        $Menu2->title_hi = "त्वरित सम्पक";
        $Menu2->title_es = "enlaces rápidos";
        $Menu2->title_ru = "Быстрые ссылки";
        $Menu2->title_pt = "Links Rápidos";
        $Menu2->title_fr = "Liens rapides";
        $Menu2->title_de = "Quicklinks";
        $Menu2->title_th = "ลิงค์ด่วน";

        $Menu2->status = 1;
        $Menu2->type = 0;
        $Menu2->cat_id = 0;
        $Menu2->link = "";
        $Menu2->created_by = 1;
        $Menu2->save();

        // Home
        $Menu = new Menu();
        $Menu->row_no = 1;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "الرئيسية";
        $Menu->title_en = "Home";
        $Menu->title_ch = "家";
        $Menu->title_hi = "घर";
        $Menu->title_es = "Casa";
        $Menu->title_ru = "Дом";
        $Menu->title_pt = "Lar";
        $Menu->title_fr = "Domicile";
        $Menu->title_de = "Home";
        $Menu->title_th = "บ้าน";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "home";
        $Menu->created_by = 1;
        $Menu->save();
        // About
        $Menu = new Menu();
        $Menu->row_no = 2;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "من نحن";
        $Menu->title_en = "About";
        $Menu->title_ch = "关于";
        $Menu->title_hi = "के बारे में";
        $Menu->title_es = "Acerca de";
        $Menu->title_ru = "О";
        $Menu->title_pt = "Cerca de";
        $Menu->title_fr = "À propos";
        $Menu->title_de = "Über uns";
        $Menu->title_th = "เกี่ยวกับ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/about";
        $Menu->created_by = 1;
        $Menu->save();
        // Services
        $Menu = new Menu();
        $Menu->row_no = 3;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "خدماتنا";
        $Menu->title_en = "Services";
        $Menu->title_ch = "服务";
        $Menu->title_hi = "सेवाएं";
        $Menu->title_es = "Servicios";
        $Menu->title_ru = "Услуги";
        $Menu->title_pt = "Serviços";
        $Menu->title_fr = "services";
        $Menu->title_de = "Services";
        $Menu->title_th = "Services";

        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 2;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // News
        $Menu = new Menu();
        $Menu->row_no = 4;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "أخبارنا";
        $Menu->title_en = "News";
        $Menu->title_ch = "新闻";
        $Menu->title_hi = "समाचार";
        $Menu->title_es = "Noticias";
        $Menu->title_ru = "Новости";
        $Menu->title_pt = "Notícia";
        $Menu->title_fr = "Nouvelles";
        $Menu->title_de = "News";
        $Menu->title_th = "ข่าว";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 3;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Photos
        $Menu = new Menu();
        $Menu->row_no = 5;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "الصور";
        $Menu->title_en = "Photos";
        $Menu->title_ch = "照片";
        $Menu->title_hi = "तस्वीरें";
        $Menu->title_es = "Fotos";
        $Menu->title_ru = "Фото";
        $Menu->title_pt = "Fotos";
        $Menu->title_fr = "Photos";
        $Menu->title_de = "Fotos";
        $Menu->title_th = "照片";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 4;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Videos
        $Menu = new Menu();
        $Menu->row_no = 6;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "الفيديو";
        $Menu->title_en = "Videos";
        $Menu->title_ch = "视频";
        $Menu->title_hi = "वीडियो";
        $Menu->title_es = "Videos";
        $Menu->title_ru = "Видео";
        $Menu->title_pt = "Vídeos";
        $Menu->title_fr = "Vidéos";
        $Menu->title_de = "Videos";
        $Menu->title_th = "วิดีโอ";

        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 5;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Audio
        $Menu = new Menu();
        $Menu->row_no = 7;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "الصوتيات";
        $Menu->title_en = "Audio";
        $Menu->title_ch = "声音的";
        $Menu->title_hi = "ऑडियो";
        $Menu->title_es = "Audio";
        $Menu->title_ru = "Аудио";
        $Menu->title_pt = "Áudio";
        $Menu->title_fr = "l'audio";
        $Menu->title_de = "Audio";
        $Menu->title_th = "เครื่องเสียง";

        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 6;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Products
        $Menu = new Menu();
        $Menu->row_no = 8;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "المنتجات";
        $Menu->title_en = "Products";
        $Menu->title_ch = "产品";
        $Menu->title_hi = "उत्पादों";
        $Menu->title_es = "Productos";
        $Menu->title_ru = "Товары";
        $Menu->title_pt = "Produtos";
        $Menu->title_fr = "Produits";
        $Menu->title_de = "Produkte";
        $Menu->title_th = "สินค้า";

        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 8;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Blog
        $Menu = new Menu();
        $Menu->row_no = 9;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "المدونة";
        $Menu->title_en = "Blog";
        $Menu->title_ch = "博客";
        $Menu->title_hi = "ब्लॉग";
        $Menu->title_es = "Blog";
        $Menu->title_ru = "Блог";
        $Menu->title_pt = "Blog";
        $Menu->title_fr = "Blog";
        $Menu->title_de = "Blog";
        $Menu->title_th = "บล็อก";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 7;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Contact
        $Menu = new Menu();
        $Menu->row_no = 10;
        $Menu->father_id = $Menu1->id;

        $Menu->title_ar = "اتصل بنا";
        $Menu->title_en = "Contact";
        $Menu->title_ch = "接触";
        $Menu->title_hi = "संपर्क करें";
        $Menu->title_es = "Contacto";
        $Menu->title_ru = "Контакт";
        $Menu->title_pt = "Contato";
        $Menu->title_fr = "Contact";
        $Menu->title_de = "Kontakt";
        $Menu->title_th = "ติดต่อ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "contact";
        $Menu->created_by = 1;
        $Menu->save();


        // Footer Menu Sub links
        // Home
        $Menu = new Menu();
        $Menu->row_no = 1;
        $Menu->father_id = $Menu2->id;

        $Menu->title_ar = "الرئيسية";
        $Menu->title_en = "Home";
        $Menu->title_ch = "家";
        $Menu->title_hi = "घर";
        $Menu->title_es = "Casa";
        $Menu->title_ru = "Дом";
        $Menu->title_pt = "Lar";
        $Menu->title_fr = "Domicile";
        $Menu->title_de = "Homer";
        $Menu->title_th = "บ้าน";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "home";
        $Menu->created_by = 1;
        $Menu->save();
        // About
        $Menu = new Menu();
        $Menu->row_no = 2;
        $Menu->father_id = $Menu2->id;

        $Menu->title_ar = "من نحن";
        $Menu->title_en = "About";
        $Menu->title_ch = "关于";
        $Menu->title_hi = "के बारे में";
        $Menu->title_es = "Acerca de";
        $Menu->title_ru = "О";
        $Menu->title_pt = "Cerca de";
        $Menu->title_fr = "À propos";
        $Menu->title_de = "Über uns";
        $Menu->title_th = "เกี่ยวกับ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/about";
        $Menu->created_by = 1;
        $Menu->save();
        // Blog
        $Menu = new Menu();
        $Menu->row_no = 3;
        $Menu->father_id = $Menu2->id;

        $Menu->title_ar = "المدونة";
        $Menu->title_en = "Blog";
        $Menu->title_ch = "博客";
        $Menu->title_hi = "ब्लॉग";
        $Menu->title_es = "Blog";
        $Menu->title_ru = "Блог";
        $Menu->title_pt = "Blog";
        $Menu->title_fr = "Blog";
        $Menu->title_de = "Blog";
        $Menu->title_th = "บล็อก";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 7;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Privacy
        $Menu = new Menu();
        $Menu->row_no = 4;
        $Menu->father_id = $Menu2->id;

        $Menu->title_ar = "الخصوصية";
        $Menu->title_en = "Privacy";
        $Menu->title_ch = "隐私";
        $Menu->title_hi = "गोपनीयता";
        $Menu->title_es = "Intimidad";
        $Menu->title_ru = "Конфиденциальность";
        $Menu->title_pt = "Privacidade";
        $Menu->title_fr = "Intimité";
        $Menu->title_de = "Datenschutz";
        $Menu->title_th = "ความเป็นส่วนตัว";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/privacy";
        $Menu->created_by = 1;
        $Menu->save();
        // Terms
        $Menu = new Menu();
        $Menu->row_no = 5;
        $Menu->father_id = $Menu2->id;

        $Menu->title_ar = "الشروط والأحكام";
        $Menu->title_en = "Terms & Conditions";
        $Menu->title_ch = "条款和条件";
        $Menu->title_hi = "नियम एवं शर्तें";
        $Menu->title_es = "Términos y condiciones";
        $Menu->title_ru = "Условия и положения";
        $Menu->title_pt = "termos e Condições";
        $Menu->title_fr = "termes et conditions";
        $Menu->title_de = "AGB";
        $Menu->title_th = "ข้อตกลงและเงื่อนไข";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/terms";
        $Menu->created_by = 1;
        $Menu->save();
        // Contact
        $Menu = new Menu();
        $Menu->row_no = 6;
        $Menu->father_id = $Menu2->id;

        $Menu->title_ar = "اتصل بنا";
        $Menu->title_en = "Contact";
        $Menu->title_ch = "接触";
        $Menu->title_hi = "संपर्क करें";
        $Menu->title_es = "Contacto";
        $Menu->title_ru = "Контакт";
        $Menu->title_pt = "Contato";
        $Menu->title_fr = "Contact";
        $Menu->title_de = "Kontakt";
        $Menu->title_th = "ติดต่อ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "contact";
        $Menu->created_by = 1;
        $Menu->save();
    }
}
