<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Banner = new Banner();
        $Banner->row_no = 1;
        $Banner->section_id = 1;

        $Banner->title_ar = "بنر رقم ١";
        $Banner->title_en = "Banner #1";
        $Banner->title_ch = "横幅 #1";
        $Banner->title_hi = "बैनर #1";
        $Banner->title_es = "Bandera #1";
        $Banner->title_ru = "Баннер #1";
        $Banner->title_pt = "Bandeira #1";
        $Banner->title_fr = "Bannière #1";
        $Banner->title_de = "Banner #1";
        $Banner->title_th = "แบนเนอร์ #1";

        $Banner->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Banner->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Banner->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Banner->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Banner->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Banner->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Banner->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Banner->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";


        $Banner->file_ar = "noimg.png";
        $Banner->file_en = "noimg.png";
        $Banner->file_ch = "noimg.png";
        $Banner->file_hi = "noimg.png";
        $Banner->file_es = "noimg.png";
        $Banner->file_ru = "noimg.png";
        $Banner->file_pt = "noimg.png";
        $Banner->file_fr = "noimg.png";
        $Banner->file_de = "noimg.png";
        $Banner->file_th = "noimg.png";

        $Banner->link_url = "#";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

        $Banner = new Banner();
        $Banner->row_no = 2;
        $Banner->section_id = 1;

        $Banner->title_ar = "بنر رقم ٢";
        $Banner->title_en = "Banner #2";
        $Banner->title_ch = "横幅 #2";
        $Banner->title_hi = "बैनर #2";
        $Banner->title_es = "Bandera #2";
        $Banner->title_ru = "Баннер #2";
        $Banner->title_pt = "Bandeira #2";
        $Banner->title_fr = "Bannière #2";
        $Banner->title_de = "Banner #2";
        $Banner->title_th = "แบนเนอร์ #2";

        $Banner->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Banner->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Banner->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Banner->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Banner->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Banner->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Banner->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Banner->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Banner->file_ar = "noimg.png";
        $Banner->file_en = "noimg.png";
        $Banner->file_ch = "noimg.png";
        $Banner->file_hi = "noimg.png";
        $Banner->file_es = "noimg.png";
        $Banner->file_ru = "noimg.png";
        $Banner->file_pt = "noimg.png";
        $Banner->file_fr = "noimg.png";
        $Banner->file_de = "noimg.png";
        $Banner->file_th = "noimg.png";

        $Banner->link_url = "#";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 1;
        $Banner->section_id = 2;

        $Banner->title_ar = "تصميم ريسبونسف";
        $Banner->title_en = "Responsive Design";
        $Banner->title_ch = "响应式设计";
        $Banner->title_hi = "प्रभावी डिजाइन";
        $Banner->title_es = "Diseño de respuesta";
        $Banner->title_ru = "Адаптивный дизайн";
        $Banner->title_pt = "Design Responsivo";
        $Banner->title_fr = "onception réactive";
        $Banner->title_de = "Reagerend ontwerp";
        $Banner->title_th = "การออกแบบที่ตอบสนอง";

        $Banner->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Banner->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Banner->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Banner->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Banner->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Banner->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Banner->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Banner->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ch = "";
        $Banner->file_hi = "";
        $Banner->file_es = "";
        $Banner->file_ru = "";
        $Banner->file_pt = "";
        $Banner->file_fr = "";
        $Banner->file_de = "";
        $Banner->file_th = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-object-group";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

        $Banner = new Banner();
        $Banner->row_no = 2;
        $Banner->section_id = 2;

        $Banner->title_ar = " احدث التقنيات";
        $Banner->title_en = "HTML5 & CSS3";
        $Banner->title_ch = "HTML5 和 CSS3";
        $Banner->title_hi = "HTML5 और CSS3";
        $Banner->title_es = "HTML5 y CSS3";
        $Banner->title_ru = "HTML5 и CSS3";
        $Banner->title_pt = "HTML5 & CSS3";
        $Banner->title_fr = "HTML5 et CSS3";
        $Banner->title_de = "HTML5 & CSS3";
        $Banner->title_th = "HTML5 & CSS3";

        $Banner->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Banner->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Banner->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Banner->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Banner->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Banner->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Banner->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Banner->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ch = "";
        $Banner->file_hi = "";
        $Banner->file_es = "";
        $Banner->file_ru = "";
        $Banner->file_pt = "";
        $Banner->file_fr = "";
        $Banner->file_de = "";
        $Banner->file_th = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-html5";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 3;
        $Banner->section_id = 2;

        $Banner->title_ar = "باستخدام بوتستراب";
        $Banner->title_en = "Bootstrap Used";
        $Banner->title_ch = "使用的引导程序";
        $Banner->title_hi = "बूटस्ट्रैप प्रयुक्त";
        $Banner->title_es = "Bootstrap utilizado";
        $Banner->title_ru = "Bootstrap";
        $Banner->title_pt = "Bootstrap usado";
        $Banner->title_fr = "Bootstrap utilisé";
        $Banner->title_de = "Bootstrap gebruikt";
        $Banner->title_th = "Bootstrap";

        $Banner->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Banner->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Banner->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Banner->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Banner->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Banner->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Banner->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Banner->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ch = "";
        $Banner->file_hi = "";
        $Banner->file_es = "";
        $Banner->file_ru = "";
        $Banner->file_pt = "";
        $Banner->file_fr = "";
        $Banner->file_de = "";
        $Banner->file_th = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-code";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 4;
        $Banner->section_id = 2;

        $Banner->title_ar = "تصميم كلاسيكي";
        $Banner->title_en = "Classic Design";
        $Banner->title_ch = "经典设计";
        $Banner->title_hi = "क्लासिक डिजाइन";
        $Banner->title_es = "Diseño clásico";
        $Banner->title_ru = "Классический";
        $Banner->title_pt = "Design Clássico";
        $Banner->title_fr = "Conception classique";
        $Banner->title_de = "Klassiek ontwerp";
        $Banner->title_th = "ดีไซน์คลาสสิก";

        $Banner->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Banner->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Banner->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Banner->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Banner->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Banner->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Banner->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Banner->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ch = "";
        $Banner->file_hi = "";
        $Banner->file_es = "";
        $Banner->file_ru = "";
        $Banner->file_pt = "";
        $Banner->file_fr = "";
        $Banner->file_de = "";
        $Banner->file_th = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-laptop";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

    }
}
