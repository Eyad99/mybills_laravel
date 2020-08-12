<?php

use App\question;
use Illuminate\Database\Seeder;

class createQuestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        question::create([
            'text_question' => 'متى يتم قطع خدمة الإتصالات ؟',
            'text_answer' => 'خدمات الإتصالات عرضة للإنقطاع في حالة عدم دفع ثلاث فواتير .',
            'text_question_en' => 'When will the telecommunications service be cut ?',
            'text_answer_en' => 'Telecom services are subject to interruption if three bills are not paid .',
            'status_view' => '1',
            'center_type' => '2',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'لم تم قطع الخدمة دون تحذيري بذلك ؟',
            'text_answer' => 'في حالة حدوث ذلك ، يرجى الاتصال بمركز الاتصالات الخاص بالشركة أو زيارة أي فرع من فروع الشركة و ابراز ما يثبت دفع الفاتورة ، و عليه سيتم توصيل الخدمة .',
            'text_question_en' => 'Why was the service cut without warning me?',
            'text_answer_en' => 'In the event that this occurs, please contact the company’s call center or visit any of the company’s branches and show proof of bill payment, so the service will be delivered.',
            'status_view' => '1',
            'center_type' => '2',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'فاتورتي تبين مبلغاً أكبر من مقدار استخدامي للخدمة !',
            'text_answer' => 'في هذه الحالة عليكم مراجعة شركة الاتصالات أو اقرب مركز للشركة بجواركم .',
            'text_question_en' => 'My bill shows an amount greater than my usage of the service !',
            'text_answer_en' => 'In this case, you should check with the telecom company or the nearest company center near you.',
            'status_view' => '1',
            'center_type' => '2',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'الأوراق اللازمة لطلب خدمة لطلب خدمة الإتصال بالإنترنت ؟',
            'text_answer' => 'براءة ذمة .. صورة عن هوية صاحب الهاتف .. طوابع .. 500 ليرة رشوة .',
            'text_question_en' => 'The papers needed to request a service to request an internet connection ?',
            'text_answer_en' => 'An acquittance of a copy .. A copy of the identity of the owner of the phone .. Stamps .. 500 pounds of bribes.',
            'status_view' => '1',
            'center_type' => '2',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'الأوراق اللازمة لرفع سرعة الإنترنت ؟',
            'text_answer' => 'براءة ذمة ..وصورة عن صاحب الهاتف .',
            'text_question_en' => 'The papers necessary to raise the speed of the Internet ?',
            'text_answer_en' => 'Clearance certificate and a copy of the phone owner.',
            'status_view' => '1',
            'center_type' => '2',
            'user_id' => '1',
        ]);
        




        question::create([
            'text_question' => 'جهاز العداد لدي لا يعمل أو عاطل عن العمل , ماذا علي فعله ؟',
            'text_answer' => 'عليكم بإبلاغ الشركة عن ذلك وستقوم الشركة بحل الأمور في أقرب وقت .',
            'text_question_en' => 'My meter is not working or is out of order, what should I do?',
            'text_answer_en' => 'You have to inform the company about that, and the company will solve the matter as soon as possible.',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'كيف يقوم قراء العدادات بتسجيل قراءات العدادات ؟',
            'text_answer' => 'جميع قرائي العدادات مزودون بجهاز الكتروني يستخدم في تسجيل بيانات الموقع و قراءات العدادات به. وذلك بالمسح الالكتروني للرموز المواقع (ملصق بالمبنى يظهر بينات الموقع المشفرة) و من ثم إدخال القراءات الظاهرة على العدادات يدوياً.',
            'text_question_en' => 'How do meter readers record meter readings?',
            'text_answer_en' => 'All meter readers are equipped with an electronic device that is used to record location data and meter readings with it. By scanning the site codes (a sticker on the building showing the encrypted site data) and then entering the readings appearing on the meters manually.',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'لم تم قطع خدمة الكهرباء ؟',
            'text_answer' => 'يتم قطع الخدمة بعد مرور 60 يوماً من تاريخ إصدار أقدم فاتورة غير مدفوعة. و سيتم ارجاع الخدمة فوّر دفع المستحقات المتأخرة مع رسوم إعادة توصيل الخدمة .',
            'text_question_en' => 'Why was the electricity service cut off?',
            'text_answer_en' => 'The service will be disconnected after 60 days from the date of issuance of the oldest unpaid invoice. The service will be returned immediately after the payment of the overdue dues along with the service reconnection fees.',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'لقد تم قطع خدمة الكهرباء عني دون سابق إنذار ؟',
            'text_answer' => 'بسبب وجود مستحقات غير مدفوعة عن فترة تتجاوز أو تصل إلى 60 يوماً ، و يتم قطع الخدمة بعدها. على أن تسترجع الخدمة المقطوعة بعد سداد المتأخرات مع دفع رسوم إعادة توصيل الخدمة.',
            'text_question_en' => 'My electricity service was cut off without notice?',
            'text_answer_en' => 'Because there are unpaid dues for a period exceeding or up to 60 days, after which the service is cut off. Provided that the disconnected service will be recovered after paying the arrears and paying the fees for reconnecting the service.',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'هناك خطأ بين القراءة المذكورة على الفاتورة وبين القراءة الفعلية الظاهرة على العداد !',
            'text_answer' =>'الرجاء إعلام أقرب مركز للشركة لديكم , وعليه ستقوم الشركة بإرسال المفتش المعني بمنطقتكم وموافاتكم بالتفاصيل بعدها .',
            'text_question_en' => 'There is an error between the reading mentioned on the bill and the actual reading shown on the meter!',
            'text_answer_en' => 'Please inform the nearest center of the company you have, and accordingly the company will send the relevant inspector in your area and provide you with the details afterwards.',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' =>'الاستعلام عن فاتورة الكهرباء باستخدام رقم الهاتف الثابت في مدينة دمشق ؟',
            'text_answer' =>'170',
            'text_question_en' => 'Inquire about the electricity bill using the fixed phone number in Damascus?',
            'text_answer_en' => '170',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'الاستعلام عن فاتورة الكهرباء باستخدام رقم الهاتف الثابت في مدينة ريف دمشق ؟',
            'text_answer' =>'163',
            'text_question_en' => 'Inquire about the electricity bill using the fixed phone number in the city of Damascus countryside?',
            'text_answer_en' => '163',
            'status_view' => '1',
            'center_type' => '1',
            'user_id' => '1',
        ]);






        question::create([
            'text_question' => 'الأوراق المطلوبة للإشتراك بعداد المياه المنزلي (النظامي) ؟',
            'text_answer' => ' وثيقة ملكية (رخصة بناء مع عقد بيع موثق، أو مع إخراج قيد عقاري، أو مع حكم محكمة مصدق).
            صورة عن الهوية الشخصية.
            أقرب وصل (فاتورة مياه) جوار',
            'text_question_en' => 'The papers required to subscribe to the domestic (regular) water meter?',
            'text_answer_en' => 'Ownership document (a building permit with a notarized sale contract, or with a real estate registry, or with a certified court ruling).
            A copy of the identity card.
            Nearest receipt (water bill) next to',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'الأوراق المطلوبة للإشتراك بعداد المياه المنزلي (المخالفات) ؟',
            'text_answer' => 'سند إقامة من المختار مع صورة عنه يثبت أنه شاغل العقار... 
            صورة عن الهوية الشخصية...
            أقرب وصل (فاتورة مياه) جوار.',
            'text_question_en' => 'The papers required to subscribe to the home water meter (fines)?',
            'text_answer_en' => 'A residency document from the Mukhtar with a copy of him proving that he is the owner of the property ...
            A copy of the identity card ...
            Nearest receipt (water bill) next to.',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'الأوراق المطلوبة للإشتراك بعداد المياه(التجاري) ؟ ',
            'text_answer' => 'تكليف مالي (النسخة الخضراء) أو مزاولة مهنة أو وثيقة ملكية نظامية للمحل...
            صورة عن الهوية الشخصية...
            أقرب وصل (فاتورة مياه) جوار.',
            'text_question_en' => 'The papers required to subscribe to the (commercial) water meter?',
            'text_answer_en' => 'A financial mandate (green copy) or the practice of a profession or a legal ownership document for the shop ...
            A copy of the identity card ...
            Nearest receipt (water bill) next to.',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'تكلفة العداد المنزلي لقطر1/2 ؟',
            'text_answer' => 'تكلفة العداد المنزلي لقطر1/2 إنش هو/22425/ ليرة سورية ويضاف /1900/ل.س لكل متر حفر إضافي فوق الستة أمتار إضافة إلى أثمان مياه العمار.',
            'text_question_en' => 'The cost of the home meter diameter of 1/2?',
            'text_answer_en' => 'The cost of a home meter for a diameter of 1/2 inch is / 22425 / Syrian pounds, and /1900 / ls per meter, additional drilling over the six meters is added in addition to the prices of construction water.',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' => 'تكلفة العداد التجاري لقطر 1/2 إنش مستوى أول ؟',
            'text_answer' => 'تكلفة العداد التجاري لقطر 1/2 إنش مستوى أول (مخزن- مكاتب مخصصة للتجارة أوممارسة المهن – محل تجاري –مكتب عيادة – صيدلية ومابحكمها هو/ 32738/ ليرة سورية ويضاف /1900/ل.س لكل متر حفر إضافي فوق الستة أمتار إضافة إلى أثمان مياه العمار.',
            'text_question_en' => 'The cost of a commercial counter of a 1/2 inch diameter first level?',
            'text_answer_en' => 'The cost of a commercial counter of a diameter of 1/2 inch, first level (store - offices dedicated to trade or practicing professions - commercial store - clinic office - pharmacy and its barometer is 32,738 Syrian pounds, and 1900 SP is added for each meter of additional drilling over the six meters in addition to the price of building water. ',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' =>'تكلفة العداد التجاري لقطر 1/2 إنش مستوى ثاني ؟',
            'text_answer' =>'تكلفة العداد التجاري لقطر 1/2 إنش مستوى ثاني ( مطعم وجبات سريعة- جزار – محلات عصير وما بحكمها /37238/ ليرة سورية ويضاف /1900/ل.س لكل متر حفر إضافي فوق الستة أمتار إضافة إلى أثمان مياه العمار .',
            'text_question_en' => 'The cost of a commercial counter of a 1/2 inch diameter is a second level?',
            'text_answer_en' => 'The cost of the commercial counter for a diameter of 1/2 inch, second level (fast food restaurant - butcher - juice shops and the like is / 37238 / Syrian pounds, and /1900 / ls per meter, additional drilling over the six meters, in addition to the prices of construction water.',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' =>'رسوم تبديل العداد نصف إنش ؟',
            'text_answer' => 'حسب العطل طبيعي أو مفتعل .',
            'text_question_en' => 'Fee to replace the meter half an inch?',
            'text_answer_en' => 'According to the malfunction, natural or artificial.',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
        question::create([
            'text_question' =>'رسوم نقل ملكيةعداد المياه المنزلي ؟',
            'text_answer' =>'600 ليرة سورية .',
            'text_question_en' => 'Fees for transferring ownership of a domestic water meter?',
            'text_answer_en' => '600 Syrian pounds.',
            'status_view' => '1',
            'center_type' => '0',
            'user_id' => '1',
        ]);
   
    }
}
