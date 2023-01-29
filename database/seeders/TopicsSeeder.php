<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // About
        $Topic = new Topic();
        $Topic->row_no = 1;
        $Topic->webmaster_id = 1;

        $Topic->title_ar = "من نحن";
        $Topic->title_en = "About Us";
        $Topic->title_ch = "关于";
        $Topic->title_hi = "के बारे में";
        $Topic->title_es = "Acerca de";
        $Topic->title_ru = "О";
        $Topic->title_pt = "Cerca de";
        $Topic->title_fr = "À propos";
        $Topic->title_de = "Over";
        $Topic->title_th = "เกี่ยวกับ";

        $Topic->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Topic->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Topic->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Topic->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Topic->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Topic->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Topic->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Topic->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";


        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();


        // Contact
        $Topic = new Topic();
        $Topic->row_no = 2;
        $Topic->webmaster_id = 1;

        $Topic->title_ar = "اتصل بنا";
        $Topic->title_en = "Contact Us";
        $Topic->title_ch = "接触";
        $Topic->title_hi = "संपर्क करें";
        $Topic->title_es = "Contacto";
        $Topic->title_ru = "Контакт";
        $Topic->title_pt = "Contato";
        $Topic->title_fr = "Contact";
        $Topic->title_de = "Contact";
        $Topic->title_th = "ติดต่อ";

        $Topic->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Topic->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Topic->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Topic->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Topic->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Topic->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Topic->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Topic->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";


        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

        // Privacy
        $Topic = new Topic();
        $Topic->row_no = 3;
        $Topic->webmaster_id = 1;

        $Topic->title_ar = "الخصوصية";
        $Topic->title_en = "Privacy";
        $Topic->title_ch = "隐私";
        $Topic->title_hi = "गोपनीयता";
        $Topic->title_es = "Intimidad";
        $Topic->title_ru = "Конфиденциальность";
        $Topic->title_pt = "Privacidade";
        $Topic->title_fr = "Intimité";
        $Topic->title_de = "Privacy";
        $Topic->title_th = "ความเป็นส่วนตัว";

        $Topic->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Topic->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Topic->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Topic->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Topic->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Topic->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Topic->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Topic->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

        // Terms
        $Topic = new Topic();
        $Topic->row_no = 4;
        $Topic->webmaster_id = 1;

        $Topic->title_ar = "الشروط والأحكام";
        $Topic->title_en = "Terms & Conditions";
        $Topic->title_ch = "条款和条件";
        $Topic->title_hi = "नियम एवं शर्तें";
        $Topic->title_es = "Términos y condiciones";
        $Topic->title_ru = "Условия и положения";
        $Topic->title_pt = "termos e Condições";
        $Topic->title_fr = "termes et conditions";
        $Topic->title_de = "algemene voorwaarden";
        $Topic->title_th = "ข้อตกลงและเงื่อนไข";

        $Topic->details_ar = "هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_ch = "一个长期存在的事实是，读者会被页面的可读内容分散注意力。";
        $Topic->details_hi = "यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक किसी पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।";
        $Topic->details_es = "Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.";
        $Topic->details_ru= "Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы.";
        $Topic->details_pt = "É um fato estabelecido há muito tempo que um leitor se distrairá com o conteúdo legível de uma página.";
        $Topic->details_fr = "C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.";
        $Topic->details_de = "Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.";
        $Topic->details_th = "เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า";

        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

        // home
        $Topic = new Topic();
        $Topic->row_no = 5;
        $Topic->webmaster_id = 1;

        $Topic->title_ar = "الصفحة الرئيسية";
        $Topic->title_en = "Home Welcome";
        $Topic->title_ch = "家";
        $Topic->title_hi = "घर";
        $Topic->title_es = "Casa";
        $Topic->title_ru = "Дом";
        $Topic->title_pt = "Lar";
        $Topic->title_fr = "Domicile";
        $Topic->title_de = "Thuis";
        $Topic->title_th = "บ้าน";

        $Topic->details_ar = "<div style='text-align: center'><h2>مرحبا بكم في موقعنا</h2>
هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.</div>";

        $Topic->details_en = "<div style='text-align: center'><h2>Welcome to our website</h2>It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.It is a long established fact that a reader will be distracted by the readable content of a page.</div>";

        $Topic->details_ch = "<div style='text-align: center'><h2>欢迎来到我们的网站</h2>485 / 5000
Translation results
读者会被页面的可读内容分心是一个长期确立的事实 被页面的可读内容分心。长期以来，读者会被页面的可读内容分心，这是一个长期确立的事实。长期以来，读者会被页面的可读内容分心。 </div>";

        $Topic->details_hi = "<div style='text-align: center'><h2>हमारी वैबसाइट पर आपका स्वागत है</h2>यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा। यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा। यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक होगा एक पृष्ठ की पठनीय सामग्री से विचलित हो। यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा। यह एक लंबे समय से स्थापित तथ्य है कि एक पाठक एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।.</div>";

        $Topic->details_es = "<div style='text-align: center'><h2>Bienvenido a nuestro sitio web</h2>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página. Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página. distraerse con el contenido legible de una página. Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página. Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página.</div>";

        $Topic->details_ru= "<div style='text-align: center'><h2>Добро пожаловать на наш сайт</h2>То, что читатель будет отвлекаться на удобочитаемое содержание страницы, - давно установленный факт. То, что читатель будет отвлекаться на читаемое содержание страницы, - давно установленный факт. отвлекаться на читабельное содержание страницы. Давно установлено, что читатель будет отвлекаться на читабельное содержание страницы. Давно установившийся факт, что читатель будет отвлекаться на читаемое содержание страницы.</div>";

        $Topic->details_pt = "<div style='text-align: center'><h2>Bem-vindo ao nosso site</h2>É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página. É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página. É um fato estabelecido há muito tempo que um leitor irá ser distraído pelo conteúdo legível de uma página. É um fato estabelecido que um leitor será distraído pelo conteúdo legível de uma página. É um fato estabelecido que um leitor será distraído pelo conteúdo legível de uma página.</div>";

        $Topic->details_fr = "<div style='text-align: center'><h2>Bienvenue sur notre site</h2>C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.C'est un fait établi de longue date qu'un lecteur être distrait par le contenu lisible d'une page. C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page. C'est un fait établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page.</div>";

        $Topic->details_de = "<div style='text-align: center'><h2>Welkom op onze website</h2>Het staat al lang vast dat een lezer wordt afgeleid door de leesbare inhoud van een pagina. Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina. worden afgeleid door de leesbare inhoud van een pagina. Het staat al lang vast dat een lezer wordt afgeleid door de leesbare inhoud van een pagina. Het is een vaststaand feit dat een lezer wordt afgeleid door de leesbare inhoud van een pagina.</div>";

        $Topic->details_th = "<div style='text-align: center'><h2>ยินดีต้อนรับสู่เว็บไซต์ของเรา</h2>เป็นข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า ข้อเท็จจริงที่เป็นที่ยอมรับมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า เป็นความจริงที่เป็นที่ยอมรับมานานแล้วว่าผู้อ่านจะ ฟุ้งซ่านโดยเนื้อหาที่อ่านได้ของหน้า เป็นความจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า ข้อเท็จจริงที่มีมาช้านานว่าผู้อ่านจะถูกรบกวนโดยเนื้อหาที่อ่านได้ของหน้า</div>";


        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

    }
}
