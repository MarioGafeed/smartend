<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  Default Site Settings

        $settings = new Setting();
        $settings->site_title_ar = "اسم الموقع";
        $settings->site_title_en = "Site Title";
        $settings->site_title_ch = "网站标题";
        $settings->site_title_hi = "घटनास्थल शीर्षक";
        $settings->site_title_es = "Título del sitio";
        $settings->site_title_ru = "Заголовок сайта";
        $settings->site_title_pt = "titulo do site";
        $settings->site_title_fr = "Titre du site";
        $settings->site_title_de = "Pagina Titel";
        $settings->site_title_th = "ชื่อเว็บไซต์";

        $settings->site_desc_ar = "وصف الموقع الإلكتروني ونبذة قصيره عنه";
        $settings->site_desc_en = "Website description and some little information about it";
        $settings->site_desc_ch = "网站描述和一些关于它的小信息";
        $settings->site_desc_hi = "वेबसाइट विवरण और इसके बारे में कुछ छोटी जानकारी";
        $settings->site_desc_es = "Descripción del sitio web y poca información al respecto.";
        $settings->site_desc_ru = "Описание веб-сайта и небольшая информация о нем";
        $settings->site_desc_pt = "Descrição do site e algumas poucas informações sobre ele";
        $settings->site_desc_fr = "Description du site et quelques informations à son sujet";
        $settings->site_desc_de = "Beschrijving van de website en wat informatie erover";
        $settings->site_desc_th = "คำอธิบายเว็บไซต์และข้อมูลเล็กน้อยเกี่ยวกับมัน";

        $settings->site_keywords_ar = "كلمات، دلالية، موقع، موقع إلكتروني";
        $settings->site_keywords_en = "key, words, website, web";
        $settings->site_keywords_ch = "关键，词，网站，网络";
        $settings->site_keywords_hi = "कुंजी, शब्द, वेबसाइट, वेब";
        $settings->site_keywords_es = "clave, palabras, sitio web, web";
        $settings->site_keywords_ru = "ключ, слова, веб-сайт, веб";
        $settings->site_keywords_pt = "chave, palavras, site, web";
        $settings->site_keywords_fr = "clé, mots, site web, web";
        $settings->site_keywords_de = "sleutel, woorden, website, web";
        $settings->site_keywords_th = "คีย์ คำ เว็บไซต์ เว็บ";

        $settings->site_webmails = "info@sitename.com";
        $settings->notify_messages_status = "1";
        $settings->notify_comments_status = "1";
        $settings->notify_orders_status = "1";
        $settings->site_url = "http://www.sitename.com/";
        $settings->site_status = "1";
        $settings->close_msg = "Website under maintenance \n<h1>Comming SOON</h1>";
        $settings->social_link1 = "#";
        $settings->social_link2 = "#";
        $settings->social_link3 = "#";
        $settings->social_link4 = "#";
        $settings->social_link5 = "#";
        $settings->social_link6 = "#";
        $settings->social_link7 = "#";
        $settings->social_link8 = "#";
        $settings->social_link9 = "#";
        $settings->social_link10 = "#";

        $settings->contact_t1_ar = "المبني - اسم الشارع - المدينة - الدولة";
        $settings->contact_t1_en = "Building, Street name, City, Country";
        $settings->contact_t1_ch = "建筑物、街道名称、城市、国家";
        $settings->contact_t1_hi = "भवन, सड़क का नाम, शहर, देश";
        $settings->contact_t1_es = "Edificio, Nombre de la calle, Ciudad, País";
        $settings->contact_t1_ru = "Здание, Название улицы, Город, Страна";
        $settings->contact_t1_pt = "Edifício, nome da rua, cidade, país";
        $settings->contact_t1_fr = "Bâtiment, Nom de rue, Ville, Pays";
        $settings->contact_t1_de = "Gebouw, straatnaam, plaats, land";
        $settings->contact_t1_th = "อาคาร ชื่อถนน เมือง ประเทศ";

        $settings->contact_t3 = "+(xxx) 0xxxxxxx";
        $settings->contact_t4 = "+(xxx) 0xxxxxxx";
        $settings->contact_t5 = "+(xxx) 0xxxxxxx";
        $settings->contact_t6 = "info@sitename.com";

        $settings->contact_t7_ar = "من الأحد إلى الخميس 08:00 ص - 05:00 م";
        $settings->contact_t7_en = "Sunday to Thursday 08:00 AM to 05:00 PM";
        $settings->contact_t7_ch = "周日至周四 08:00 AM 至 05:00 PM";
        $settings->contact_t7_hi = "रविवार से गुरुवार सुबह 08:00 बजे से शाम 05:00 बजे तक";
        $settings->contact_t7_es = "Domingo a jueves 08:00 AM a 05:00 PM";
        $settings->contact_t7_ru = "С воскресенья по четверг с 08:00 до 17:00.";
        $settings->contact_t7_pt = "Domingo a quinta-feira, das 8h às 17h";
        $settings->contact_t7_fr = "Du dimanche au jeudi de 08h00 à 17h00";
        $settings->contact_t7_de = "zondag t/m donderdag 08:00 uur tot 17:00 uur";
        $settings->contact_t7_th = "อาทิตย์-พฤหัสบดี 08.00-17.00 น.";

        $settings->style_color1 = "#0cbaa4";
        $settings->style_color2 = "#2e3e4e";
        $settings->style_type = "0";
        $settings->style_bg_type = "0";
        $settings->style_subscribe = "1";
        $settings->style_footer = "1";
        $settings->style_header = "0";
        $settings->style_preload = "0";
        $settings->created_by = 1;

        $settings->save();
    }
}
