<?php

use yii\db\Migration;

/**
 * Class m240730_144330_translate_privacy_texts
 */
class m240730_144330_translate_privacy_texts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'privacyTexts',
            'text_am' => '<p>iNFOEXPERT ACADEMY-ում մենք պարտավորվում ենք պաշտպանել Ձեր տվյալների գաղտնիությունը և Ձեզ տրամադրել հզոր և անվտանգ առցանց փորձ:<br />
Դուք կարող եք ճանապարհորդել այս կայքում (այսուհետ՝ &laquo;Կայք&raquo;) առանց մեզ Ձեր մասին որևէ տեղեկատվություն տրամադրելու, բացառությամբ այն դեպքերի, երբ կբաժանորդագրվեք, հարցում կուղարկեք որևէ ապրանքի/ծառայության վերաբերյալ տեղեկատվություն ստանալու համար, կկատարեք առցանց դասընթացի գնում կամ երբ մեզ կուղարկեք Ձեր ինքնակենսագրականը՝ աշխատանքի ընդունվելու նպատակով։</p>

<p>Գաղտնիության այս հայտարարությունը (այսուհետ՝&laquo;Գաղտնիության քաղաքականություն&raquo;) բացատրում է iNFOEXPERT ACADEMY-ի կողմից տվյալների հավաքագրման և օգտագործման գործելակերպը:</p>

<p>Սույն &laquo;Գաղտնիության քաղաքականություն&raquo;-ը վերաբերում է Կայքի և դրա բոլոր հնարավորությունների օգտագործմանը:</p>

<p>Խնդրում ենք ուշադիր կարդալ այս &laquo;Գաղտնիության քաղաքականություն&raquo;-ը:</p>

<p>Օգտագործելով Կայքը՝ դուք համաձայնում եք, որ Ձեր կողմից տրամադրված տեղեկատվությունը մենք կարող ենք օգտագործել հետևյալ նպատակների համար․<br />
Մենք չենք բացահայտի Ձեր անձնական տվյալները iNFOEXPERT ACADEMY-ից դուրս, բացառությամբ այնպիսի սահմանափակ դեպքերի, ինչպիսիք են՝</p>

<ul>
	<li>Մենք կարող ենք վարձել այլ ընկերությունների՝ մեր անունից սահմանափակ ծառայություններ մատուցելու նպատակով, այդ թվում՝ էլեկտրոնային կամ փոստային նամակների ուղարկում/առաքում, ապրանքների/ծառայությունների և միջոցառումների վերաբերյալ տեղեկատվության տրամադրում։ Մենք այդ ընկերություններին կտրամադրենք միայն այն տեղեկատվությունը, որն անհրաժեշտ է ծառայությունը մատուցելու համար և նրանց արգելվում է օգտագործել այդ տեղեկատվությունը որևէ այլ նպատակով:</li>
	<li>Մենք կարող ենք բացահայտել Ձեր անձնական տվյալները, եթե դա պահանջվում է օրենքով՝ պաշտպանելու iNFOEXPERT ACADEMY-ի իրավունքները, սեփականությունը, մեր օգտատերերի և հանրության անձնական անվտանգությունը:</li>
	<li>Մենք կարող ենք Ձեր կողմից տրամադրված տվյալներն օգտագործել պայմանագիր պատրաստելու համար, երբ Ձեր կողմից կկատրվի առցանց դասընթացի գնում։</li>
	<li>Մենք կարող ենք Ձեր կողմից տրամադրված տվյալներն օգտագործել առցանց վաճառքի գործարքը սպասարկող բանկի կողմից անխափան ապահովելու նպատակով։</li>
</ul>

<p>Ձեր կողմից տրամադրված տեղեկատվությունը, առանց Ձեր թույլտվության, բացառությամբ վերոնշյալ դեպքերի մենք չենք տրամադրում երրորդ կողմին։<br />
Ի հավելումն՝ մենք կարող ենք ուղարկել կարևոր ծանուցումներ՝ տեղեկացնելով Ձեզ մեր քաղաքականության փոփոխությունների, ապրանքի և/կամ ծառայության հետ կապված տեխնիկական սպասարկման հարցերի, մարքեթինգային նպատակների կամ այլ տեղեկատվության մասին, որը կարևոր է մեր Կայքի, ծառայությունների և/կամ ապրանքների օգտագործման և դրանց որակի շարունակական բարելավման նպատակներով։</p>
',
            'text_ru'  => '<p>В iNFOEXPERT ACADEMY&nbsp;мы стремимся защищать конфиденциальность ваших данных и предоставлять вам мощный и безопасный онлайн-опыт. &nbsp;<br />
Вы можете перемещаться по этому веб-сайту (далее &quot;Сайт&quot;), не предоставляя нам никакой информации о себе, за исключением случаев, когда вы подписываетесь, отправляете запрос на информацию о продукте или услуге, приобретаете онлайн-курс или когда вы отправляете нам свое резюме для цель трудоустройства.<br />
Настоящее заявление о конфиденциальности (далее &quot;Политика конфиденциальности&quot;) объясняет правила сбора и использования данных iNFOEXPERT ACADEMY.<br />
Настоящая &quot;Политика конфиденциальности&quot; распространяется на использование Сайта и всех его функций.<br />
Пожалуйста, внимательно прочтите настоящую &quot;Политику конфиденциальности&quot;.<br />
Используя Сайт, вы соглашаетесь с тем, что мы можем использовать предоставленную вами информацию для следующих целей:<br />
Мы не будем раскрывать вашу личную информацию за пределами iNFOEXPERT ACADEMY, за исключением таких ограниченных случаев, как:</p>

<ul>
	<li>Мы можем нанимать другие компании для предоставления ограниченных услуг от нашего имени, включая отправку/доставку электронной или обычной почты и предоставление информации о продуктах/услугах и мероприятиях. Мы предоставим этим компаниям только ту информацию, которая необходима для предоставления услуги, и им запрещено использовать эту информацию для каких-либо других целей.</li>
	<li>Мы можем раскрыть вашу личную информацию, если этого требует закон для защиты прав, собственности и личной безопасности iNFOEXPERT ACADEMY наших пользователей и общественности.</li>
	<li>Мы можем использовать предоставленную вами информацию для заключения договора при покупке онлайн-курса.</li>
	<li>Мы можем использовать предоставленные вами данные, чтобы обеспечить бесперебойную работу операции онлайн-продажи обслуживающего банка.</li>
</ul>

<p>Мы не предоставляем предоставленную вами информацию третьим лицам без вашего разрешения, за исключением вышеперечисленных случаев.<br />
Кроме того, мы можем отправлять вам важные уведомления, информирующие вас об изменениях в нашей политике, проблемах обслуживания продуктов и/или услуг, маркетинговых целях или другой информации, которая важна для дальнейшего использования и качества нашего Сайта, услуг и/или или продукты для целей улучшения.</p>
',
            'text_en'  => "<p>At iNFOEXPERT ACADEMY, we are committed to protecting the privacy of your data and providing you with a powerful and secure online experience.<br />
You can navigate this website (hereinafter &nbsp;&quot;Site&quot;)&nbsp;without providing us with any information about yourself, except when you subscribe, send a request for information about a product or service, purchase an online course, or when you send us your resume for the purpose of employment.<br />
This privacy statement (hereinafter the &quot;Privacy Policy&quot;) explains the data collection and usage practices of iNFOEXPERT ACADEMY.<br />
This &quot;Privacy Policy&quot; applies to the use of the Site and all its features.<br />
Please read this &quot;Privacy Policy&quot; carefully.<br />
By using the Site, you agree that we may use the information you provide for the following purposes:<br />
We will not disclose your personal information outside of iNFOEXPERT ACADEMY, except in such limited cases as:</p>

<ul>
	<li>We may hire other companies to provide limited services on our behalf, including sending/delivering email or postal mail and providing information about products/services and events. We will only provide these companies with the information necessary to provide the service, and they are prohibited from using that information for any other purpose.</li>
	<li>We may disclose your personal information if required by law to protect iNFOEXPERT ACADEMY&#39;s rights, property, and personal safety of our users and the public.</li>
	<li>We may use the information you provide to create a contract when you purchase an online course.</li>
	<li>We may use the data provided by you in order to ensure the smooth operation of the online sales transaction by the servicing bank.</li>
</ul>

<p>We do not provide the information provided by you to third parties without your permission, except for the above cases.<br />
In addition, we may send you important notices informing you of changes to our policies, product and/or service-related maintenance issues, marketing purposes, or other information that is important to the continued use and quality of our Site, services, and/or products for improvement purposes.</p>
",
            'page_id'  => null
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240730_144330_translate_privacy_texts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240730_144330_translate_privacy_texts cannot be reverted.\n";

        return false;
    }
    */
}
