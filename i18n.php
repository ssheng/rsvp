<?php

function get_i18n_strings($language)
{
    $i18n = array();
    if ($language == 'zh')
    {
        // Navbar
        $i18n['navbar_rsvp'] = 'RSVP';
        $i18n['navbar_timeline'] = '日程';
        $i18n['navbar_info'] = '细节';

        // Title Section
        $i18n['title'] = 'Yuqing & Sean';
        $i18n['sub_title'] = '夏威夷 ｜ 2018.10.6';

        // Wedding Timeline Section
        $i18n['timeline'] = '婚礼日程';
        $i18n['timeline_details'] = '2018年10月6日 星期六 10AM - 6PM';

        $i18n['timeline_ceremony_subheading'] = '海边仪式';
        $i18n['timeline_ceremony_text'] = '我们的幸福需要您与大海的见证，诚邀您在Kapalua海湾参加我们的婚礼。请于上午10点到达海边露台。简短的仪式将于上午十点十五分准时开始。';

        $i18n['timeline_cocktail_subheading'] = '鸡尾酒会';
        $i18n['timeline_cocktail_text'] = '仪式前后，备有饮品。您可以漫步在阳光下的沙滩和绿茵，伴有大海的吟唱分享我们的甜蜜';

        $i18n['timeline_reception_subheading'] = '婚礼宴会';
        $i18n['timeline_reception_text'] = '婚宴将由Merriman\'s Kapalua提供. 如果您有特殊的饮食要求，麻烦告知我们哦。';
        
        $i18n['timeline_sail_subheading'] = '夕阳泛舟';
        $i18n['timeline_sail_text'] = '扬帆踏浪观沧海，粼粼波光依斜阳。我们将从<a href="https://www.google.com/maps/place/675+Wharf+St,+Lahaina,+HI+96761/@20.8717721,-156.6789451,17z/data=!4m5!3m4!1s0x79552bb83fad7399:0x5588dff31b6c22d7!8m2!3d20.8719375!4d-156.6788271" target="_blank">Lahaina Harbor: 675 Wharf Street, Lahaina, HI 96761</a>出发，行程大约2个小时。我们会准备一些晕船药品，希望美好的景色能使您忘却不适。此外，根据当地法规要求，我们会在婚礼之前，跟大家再次确认宾客信息，制作登船宾客名单。';

        // RSVP Section
        $i18n['rsvp_greeting'] = 'Hello，';
        $i18n['rsvp_greeting_sub'] = '爱情长跑6年，诚挚邀请您与我们共同见证';
        $i18n['rsvp_greeting_sub_heading'] = 'Yuqing & Sean\'s Wedding';
        $i18n['rsvp_greeting_sub_date'] = '2018.10.6 星期六 10AM - 6PM';
        $i18n['rsvp_greeting_sub_attendQ'] = '请您拨冗莅临。如果您能前往，请在';
        $i18n['rsvp_greeting_sub_attendQ_appendix'] = '前通知我们';

        $i18n['rsvp_invalid_feedback'] = '错误！请选择一个选项。';

        $i18n['rsvp_q1_guest'] = '请问参加婚礼的人数(包括您自己)?';
        $i18n['rsvp_q2_sail'] = '请问您和您的同伴计划来参加<a href="#timeline">游船</a>吗?';
        $i18n['rsvp_q3_comment'] = '其他的一些信息';

        $i18n['rsvp_q3_comment_placeholder'] = '例如， 宾客姓名，忌口以及特殊饮食要求等。';
        $i18n['rsvp_submit'] = '提交';

        // Wedding Information Section
        $i18n['wedding_information'] = '婚礼细节';

        $i18n['wedding_information_location'] = '地址：Merriman\'s Maui';
        $i18n['wedding_information_location_text'] = '餐厅门口设有少量停车位，此外餐厅还设有停车场。大停车场在转弯进入Bay Club Pl之后您的左手边。期待您的光临。';

        $i18n['wedding_information_date'] = '2018.10.6 星期六 10AM';
        $i18n['wedding_information_date_text'] = '十月的夏威夷气候宜人，湿度、湿度适中。平均气温在最低20&deg;C至最高27&deg;C左右。请您做好防晒工作，海边风大，也注意防寒保暖哦。';

        $i18n['wedding_information_dresscode'] = '打扮美美哒';
        $i18n['wedding_information_dresscode_text'] = '我们对着装没有特殊要求，我们只希望您能够在舒适的环境中分享我们的喜悦。仪式将在户外海边露台举行，稍后婚宴敬请挪步至餐厅内。';
  
        $i18n['wedding_information_airport'] = '机场';
        $i18n['wedding_information_airport_text'] = '茂宜岛的主要机场是Kahului (OGG)。如果您从夏威夷以外的地方出发，有极大可能您会降落在OGG机场。
        <br>在夏威夷岛与岛之间旅行，您可以选择Kapalua (JHM) 机场。这个机场在岛的西边，距离婚礼场地以及酒店区域都很近。';

        $i18n['wedding_information_travel'] = '旅游资讯';
        $i18n['wedding_information_travel_text'] = '<b>酒店区：</b> Lahaina, Kaanapali & Kapalua。
        <br><b>当地美食：</b> Loco Moco, Kalua Pork, Poke, Shave Ice, Acai Bowl, Mai Tai 等等。
        <br><b>Haleakala国家公园观看日出: </b>
        目前国家公园要求进入园区观看日出的游客，<font color=#008080>必须</font>在 <a href="https://www.recreation.gov/tourParkDetail.do?contractCode=NRSO&parkId=147940" target="_blank">recreation.gov</a>上申请预约。名额有限，您最早可以提前 <font color=#008080>60天</font> 递交预约申请。
        <br><b>浮潜好去处:</b>
        Molokini, Black Rock, Turtle Town, Ulua Beach等等。';

        $i18n['wedding_information_gift'] = 'Gift Registry';
        $i18n['wedding_information_gift_text'] = '感谢大家从世界的各个角落，穿过太平洋与我们共同分享喜悦。最诚挚的感谢送给远道而来，以及关心我们的家人和朋友们。';

        $i18n['one'] = '一人';
        $i18n['two'] = '两人';
        $i18n['three'] = '三人';
        $i18n['four'] = '四人';

        $i18n['yes'] = '是';
        $i18n['no'] = '否';
    }
    else
    {
        // Navbar
        $i18n['navbar_rsvp'] = 'RSVP';
        $i18n['navbar_timeline'] = 'Timeline';
        $i18n['navbar_info'] = 'Info';
        
        // Title Section
        $i18n['title'] = 'Renee & Sean';
        $i18n['sub_title'] = 'Maui, Hawaii | 2018.10.6';

        // Wedding Timeline Section
        $i18n['timeline'] = 'Wedding Timeline';
        $i18n['timeline_details'] = 'Saturday, Oct. 6, 2018, 10AM - 6PM';

        $i18n['timeline_ceremony_subheading'] = 'Ceremony';
        $i18n['timeline_ceremony_text'] = 'The ceremony will take place at the ocean front deck overlooking the Kapalua Bay. Starting sharp at fifteen past ten, please allow ample travel time and arrive the venue before 10:00 AM.';

        $i18n['timeline_cocktail_subheading'] = 'Cocktail Hour';
        $i18n['timeline_cocktail_text'] = 'Good time to have a drink, relax, and enjoy the deck and the grassy overlook. Take pictures, catch up with old friends and meet new ones. We will have an open bar for you order your favourite drinks.';

        $i18n['timeline_reception_subheading'] = 'Reception';
        $i18n['timeline_reception_text'] = 'Join us for our lunch reception served by Merriman\'s Kapalua. Please let us know if there is any dietary restrictions in the RSVP form below. Once we have the menu available, you will be able to select your course on this site.';
        
        $i18n['timeline_sail_subheading'] = 'Sunset Sail';
        $i18n['timeline_sail_text'] = 'Departure at <a href="https://www.google.com/maps/place/675+Wharf+St,+Lahaina,+HI+96761/@20.8717721,-156.6789451,17z/data=!4m5!3m4!1s0x79552bb83fad7399:0x5588dff31b6c22d7!8m2!3d20.8719375!4d-156.6788271" target="_blank">Lahaina Harbor: 675 Wharf Street, Lahaina, HI 96761</a>, we will sail into sea to continue our celebration. We were told the sail boat should cause minimal seasickness but pills will be provided at the harbour should you need one. We will need all guests full names prior to boarding due to local regulations (please fill in below).';

        // RSVP Section
        $i18n['rsvp_greeting'] = 'Hello, ';
        $i18n['rsvp_greeting_sub'] = 'You are cordially invited to';
        $i18n['rsvp_greeting_sub_heading'] = 'Renee & Sean\'s Wedding';
        $i18n['rsvp_greeting_sub_date'] = 'Saturday, October 6, 2018 10AM - 6PM';
        $i18n['rsvp_greeting_sub_attendQ'] = 'Will you be able to join us? Please R.S.V.P. by ';
        $i18n['rsvp_greeting_sub_attendQ_appendix'] = '.';

        $i18n['rsvp_invalid_feedback'] = 'Please make a selection.';

        $i18n['rsvp_q1_guest'] = 'How many people in your party (including yourself) will be joining?';
        $i18n['rsvp_q2_sail'] = 'Will you & your guest be joining us for the <a href="#timeline">sunset sail?</a>';
        $i18n['rsvp_q3_comment'] = 'Anything we should know about?';
        
        $i18n['rsvp_q3_comment_placeholder'] = 'e.g. guest names, allergies, dietary restrictions, etc.';

        $i18n['rsvp_submit'] = 'Submit';

        // Wedding Information Section
        $i18n['wedding_information'] = 'Wedding Information';

        $i18n['wedding_information_location'] = 'Merriman\'s Maui (Kapalua)';
        $i18n['wedding_information_location_text'] = 'There is a small parking lot in front of the restaurant and a larger parking lot on the left hand side of when you first turn onto Bay Club Pl. Please plan sufficient travel time in case of heavy Saturday morning traffic.';

        $i18n['wedding_information_date'] = 'Saturday, Oct. 6, 2018';
        $i18n['wedding_information_date_text'] = 'The average daytime temperature in Kapalua, Maui in October is warm 27 &deg;C (81 &deg;F) with moderate heat & humidity. The evening temperature is usuaully in the low 20s &deg;C (70s &deg;F).';

        $i18n['wedding_information_dresscode'] = 'Dress Code';
        $i18n['wedding_information_dresscode_text'] = 'Our style is going to be Hawaiian (casual comfort). We hope you can relax and enjoy the sunshine without a formal dress code. The ceremony will be <font color=#008080>outdoors</font> and reception will be <font color=#008080>indoor</font>.';
       
        $i18n['wedding_information_airport'] = 'Kahului Airport (OGG)';
        $i18n['wedding_information_airport_text'] = 'Kahului Airport (OGG) is the primary airport on the island of Maui.<br>If you travel inter Hawaiian islands, Kapalua Airport (JHM) located on the west side of Maui provides a short distance from the resort destinations.';

        $i18n['wedding_information_travel'] = 'Travel';
        $i18n['wedding_information_travel_text'] = '<b>Nearby Hotel Zones:</b> Lahaina, Kaanapali & Kapalua.
        <br><b>Eating & drinking:</b> Loco Moco, Kalua Pork, Poke, Shave Ice, Acai Bowl, Mai Tai and more.
        <br><b>Sunrise at Haleakala National Park: </b>
        Make sunrise viewing reservations  <font color=#008080>(required)</font> at <a href="https://www.recreation.gov/tourParkDetail.do?contractCode=NRSO&parkId=147940" target="_blank">recreation.gov</a>, up to <font color=#008080>60 days</font> in advance.
        <br><b>Snorkeling spots:</b>
        Molokini, Black Rock, Turtle Town, Ulua Beach.';

        $i18n['wedding_information_gift'] = 'Gift Registry';
        $i18n['wedding_information_gift_text'] = 'We value your presence more than the presents. We appreciate that our families and friends traveling a long distance to be with us for our special moment, we could not ask for more.';

        $i18n['one'] = 'One';
        $i18n['two'] = 'Two';
        $i18n['three'] = 'Three';
        $i18n['four'] = 'Four';

        $i18n['yes'] = 'Yes';
        $i18n['no'] = 'No';
    }
    return $i18n;
}

?>