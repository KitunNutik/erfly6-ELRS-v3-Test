<?php



// POST /makemp3_new.php HTTP/1.1
// Host: ttsmp3.com
// Connection: keep-alive
// Content-Length: 38
// Pragma: no-cache
// Cache-Control: no-cache
// sec-ch-ua: " Not;A Brand";v="99", "Google Chrome";v="97", "Chromium";v="97"
// sec-ch-ua-mobile: ?0
// User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36
// sec-ch-ua-platform: "macOS"
// Content-type: application/x-www-form-urlencoded
// Accept: */*
// Origin: https://ttsmp3.com
// Sec-Fetch-Site: same-origin
// Sec-Fetch-Mode: cors
// Sec-Fetch-Dest: empty
// Referer: https://ttsmp3.com/
// Accept-Encoding: gzip, deflate, br
// Accept-Language: zh-CN,zh;q=0.9,en;q=0.8
// Cookie: _ga=GA1.2.920849775.1642665445; _gid=GA1.2.864025836.1642665445; __gads=ID=c4406c2026187d50-22f72e7508d00024:T=1642665444:RT=1642665444:S=ALNI_MZb823zgPyD2kScezjvF0mSv3lCDA



// curl 'https://ttsmp3.com/makemp3_new.php' \
//   -H 'Connection: keep-alive' \
//   -H 'Pragma: no-cache' \
//   -H 'Cache-Control: no-cache' \
//   -H 'sec-ch-ua: " Not;A Brand";v="99", "Google Chrome";v="97", "Chromium";v="97"' \
//   -H 'sec-ch-ua-mobile: ?0' \
//   -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36' \
//   -H 'sec-ch-ua-platform: "macOS"' \
//   -H 'Content-type: application/x-www-form-urlencoded' \
//   -H 'Accept: */*' \
//   -H 'Origin: https://ttsmp3.com' \
//   -H 'Sec-Fetch-Site: same-origin' \
//   -H 'Sec-Fetch-Mode: cors' \
//   -H 'Sec-Fetch-Dest: empty' \
//   -H 'Referer: https://ttsmp3.com/' \
//   -H 'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8' \
//   -H 'Cookie: _ga=GA1.2.920849775.1642665445; _gid=GA1.2.864025836.1642665445; __gads=ID=c4406c2026187d50-22f72e7508d00024:T=1642665444:RT=1642665444:S=ALNI_MZb823zgPyD2kScezjvF0mSv3lCDA' \
//   --data-raw 'msg=%E9%9B%B6&lang=Zhiyu&source=ttsmp3' \
//   --compressed

function posturl($url,$data){ 
        $headerArray =array(
        	"Connection: keep-alive",
        	"Pragma: no-cache",
        	"Cache-Control: no-cache",
        	'sec-ch-ua: " Not;A Brand";v="99", "Google Chrome";v="97", "Chromium";v="97"',
        	"sec-ch-ua-mobile: ?0",
        	"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36",
        	'sec-ch-ua-platform: "macOS"',
        	"Content-type: application/x-www-form-urlencoded",
        	"Accept: */*",
        	'Origin: https://ttsmp3.com',
        	"Accept-Encoding: gzip, deflate, br",
        	'Sec-Fetch-Site: same-origin',
        	'Sec-Fetch-Mode: cors',
        	'Sec-Fetch-Dest: empty',
        	'Referer: https://ttsmp3.com/',
        	"Accept-Language: zh-CN,zh;q=0.9,en;q=0.8",
        	//"Cookie: _ga=GA1.2.920849775.1642665445; _gid=GA1.2.864025836.1642665445; __gads=ID=c4406c2026187d50-22f72e7508d00024:T=1642665444:RT=1642665444:S=ALNI_MZb823zgPyD2kScezjvF0mSv3lCDA"
        );
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headerArray);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
     //   echo " $output \n";
        curl_close($curl);
        return json_decode($output);
}


function geturl($url){
        $headerArray =array("Content-type:application/json;","Accept:*/*");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
}




//Sounds List
$soundlist_en = array(
"0000","Zero",
"0001","One",
"0002","Two",
"0003","Three",
"0004","Four",
"0005","Five",
"0006","Point zero",
"0007","Point one",
"0008","Point two",
"0009","Point three",
"0010","Point four",
"0011","Point five",
"0012","Point six",
"0013","Point seven",
"0014","Point eight",
"0015","Point nine",
"0021","Warning",
"0022","Error",
"0023","Alert",
"0024","Feet",
"0025","Foot",
"0026","Minus",
"0027","",
"0028","Welcome Message",
"0029","Limit",
"0030","RPM",
"0031","Flight Battery Low",
"0032","Radio Voltage",
"0033","Current",
"0034","Altitude",
"0035","Point",
"0036","Volts",
"0037","Volt",
"0038","Minutes",
"0039","Minute",
"0040","Pack Voltage",
"0041","30 Seconds",
"0042","20 Seconds",
"0043","10 Seconds",
"0044","Percent",
"0045","Inactivity Alarm",
"0046","Radio Battery Low",
"0047","Degrees",
"0048","Degree",
"0049","Receiver Voltage",
"0050","Temperature",
"0051","Amps",
"0052","Amp",
"0053","Seconds",
"0054","Second",
"0055","DB",
"0056","Meters",
"0057","Meter",
"0058","No Telemetry",
"0059","Receiver Voltage Low",
"0060","Temperature Warning",
"0061","Altitude Warning",
"0062","Watt",
"0063","Watts",
"0064","Knot",
"0065","Knots",
"0066","Milliamp",
"0067","Milliamps",
"0068","Milliamp per Hour",
"0069","Milliamps per Hour",
"0070","RF signal low",
"0071","RF Signal Critical",
"0072","Receiver signal lost",
"0073","Battery capacity warning",
"0074","Throttle warning",
"0075","Switch Warning",
"0076","Kilometers per Hour",
"0077","",
"0078","",
"0079","",
"0080","",
"0081","",
"0082","",
"0083","",
"0084","",
"0085","",
"0086","",
"0087","",
"0088","",
"0089","",
"0090","",
"0091","",
"0092","",
"0093","",
"0094","",
"0095","",
"0096","",
"0097","",
"0098","",
"0099","",
"0100","Hundred",
"0101","One Hundred ",
"0102","Two Hundred",
"0103","Three Hundred",
"0104","Four Hundred",
"0105","Five Hundred",
"0106","Six Hundred",
"0107","Seven Hundred",
"0108","Eitht Hundred",
"0109","Nine Hundred",
"0110","Thousand",
"0111","1 thousand",
"0112","2 thousand",
"0113","3 thousand",
"0114","4 thousand",
"0115","5 thousand",
"0116","6 thousand",
"0117","7 thousand",
"0118","8 thousand",
"0119","9 thousand",
"0120","10 thousand ",
"0121","11 thousand",
"0122","12 thousand",
"0123","13 thousand",
"0124","14 thousand",
"0125","15 thousand",
"0126","16 thousand",
"0127","17 thousand",
"0128","18 thousand",
"0129","19 thousand",
"0130","20 thousand",
"0131","Smoke On",
"0132","Smoke Off",
"0133","Crow On",
"0134","Crow Off",
"0135","Engine Off",
"0136","Flaps first  Position",
"0137","Flaps second Position",
"0138","Flaps third Position",
"0139","",
"0140","Flaps Down",
"0141","",
"0142","Full Flaps",
"0143","Motor is Active",
"0144","Flaps Up",
"0145","Flaps 1",
"0146","Flaps 2",
"0147","Flaps 3",
"0148","Throttle Enabled / Throttle-Cut Inactive",
"0149","Throttle Disabled /Throttle-Cut Active",
"0150","Landing Gear Up",
"0151","Landing Gear Down",
"0152","Lights On",
"0153","Lights Off",
"0154","Beacon On",
"0155","Beacon Off",
"0156","Strobe On",
"0157","Strobe Off",
"0158","Throttle Hold Inactive",
"0159","Throttle Hold Active",
"0160","Throttle-Cut Active",
"0161","Throttle-Cut Inactive",
"0162","Aileron Rate Low",
"0163","",
"0164","Aileron Rate High",
"0165","Elevator Rate Low",
"0166","",
"0167","Elevator Rate High",
"0168","Gear Up",
"0169","Gear Down",
"0170","Vario On",
"0171","Vario Off",
"0172","Thermal Mode",
"0173","Normal Mode",
"0174","Landing Mode",
"0175","Acro Mode",
"0176","Flight Mode 1",
"0177","Flight Mode 2",
"0178","Flight Mode 3",
"0179","Flight Mode 4",
"0180","Flight Mode 5",
"0181","Flight Mode 6",
"0182","Flight Mode 7",
"0183","Flight Mode 8",
"0184","Acro",
"0185","Stabilized",
"0186","Return To Home",
"0187","Loiter",
"0188","Heading Hold",
"0189","Altitude Hold",
"0190","Position Hold",
"0191","Speed Mode",
"0192","",
"0193","",
"0194","",
"0195","Auto Throttle Active",
"0196","Auto throttle OFF",
"0197","",
"0198","",
"0199","Trainer On",
"0200","Trainer Off",
"0201","Timer 1 Reset",
"0202","Timer 2 Reset",
"0203","Lipo Voltage",
"0204","Model Battery",
"0260","Easystar",
"0261","Pico Cub",
"0262","Extra Hyperion",
"0263","Tricopter",
"0264","Extra LEKI",
"0265","ASW28",
"0266","Fire Devil",
"0267","Multiplex Fox",
"0268","Substitute",
"0269","Quadcopter",
"0270","Ground Speed",
"0271","Veritcal Speed",
"0272","latitude",
"0273","longitude",
"0274","Height",
"0275","",
"0276","Air Speed",
"0277","Heading",
"0278","Direction",
"0279","Roll",
"0280","Pitch",
"0281","Yaw",
"0282","",
"0283","",
"0284","",
"0285","",
"0286","",
"0287","",
"0288","",
"0289","",
"0290","",
"0291","",
"0292","",
"0293","",
"0294","",
"0295","",
"0296","",
"0297","",
"0298","",
"0299","",
"0300","",
"0301","",
"0302","",
"0303","",
"0304","",
"0305","",
"0306","",
"0307","",
"0308","",
"0309","",
"0310","",
"0311","",
"0312","",
"0313","",
"0314","",
"0315","",
"0316","",
"0317","",
"0318","",
"0319","",
"0320","",
"0321","",
"0322","",
"0323","",
"0324","",
"0325","",
"0326","",
"0327","",
"0328","",
"0329","",
"0330","",
"0331","",
"0332","",
"0333","",
"0334","",
"0335","",
"0336","",
"0337","",
"0338","",
"0339","",
"0340","",
"0341","",
"0342","",
"0343","",
"0344","",
"0345","",
"0346","",
"0347","",
"0348","",
"0349","",
"0350","",
"0351","",
"0352","",
"0353","",
"0354","",
"0355","",
"0356","",
"0357","",
"0358","",
"0359","",
"0360","",
"0361","",
"0362","",
"0363","",
"0364","",
"0365","",
"0366","",
"0367","",
"0368","",
"0369","",
"0370","",
"0371","",
"0372","",
"0373","",
"0374","",
"0375","",
"0376","",
"0377","",
"0378","",
"0379","",
"0380","",
"0381","",
"0382","",
"0383","",
"0384","",
"0385","",
"0386","",
"0387","",
"0388","",
"0389","",
"0390","",
"0391","",
"0392","",
"0393","",
"0394","",
"0395","",
"0396","",
"0397","",
"0398","",
"0399","",
"0400","0",
"0401","1",
"0402","2",
"0403","3",
"0404","4",
"0405","5",
"0406","6",
"0407","7",
"0408","8",
"0409","9",
"0410","10",
"0411","11",
"0412","12",
"0413","13",
"0414","14",
"0415","15",
"0416","16",
"0417","17",
"0418","18",
"0419","19",
"0420","20",
"0421","21",
"0422","22",
"0423","23",
"0424","24",
"0425","25",
"0426","26",
"0427","27",
"0428","28",
"0429","29",
"0430","30",
"0431","31",
"0432","32",
"0433","33",
"0434","34",
"0435","35",
"0436","36",
"0437","37",
"0438","38",
"0439","39",
"0440","40",
"0441","41",
"0442","42",
"0443","43",
"0444","44",
"0445","45",
"0446","46",
"0447","47",
"0448","48",
"0449","49",
"0450","50",
"0451","51",
"0452","52",
"0453","53",
"0454","54",
"0455","55",
"0456","56",
"0457","57",
"0458","58",
"0459","59",
"0460","60",
"0461","61",
"0462","62",
"0463","63",
"0464","64",
"0465","65",
"0466","66",
"0467","67",
"0468","68",
"0469","69",
"0470","70",
"0471","71",
"0472","72",
"0473","73",
"0474","74",
"0475","75",
"0476","76",
"0477","77",
"0478","78",
"0479","79",
"0480","80",
"0481","81",
"0482","82",
"0483","83",
"0484","84",
"0485","85",
"0486","86",
"0487","87",
"0488","88",
"0489","89",
"0490","90",
"0491","91",
"0492","92",
"0493","93",
"0494","94",
"0495","95",
"0496","96",
"0497","97",
"0498","98",
"0499","99"
);

$soundlist_ru = array(
"0000", "ноль",
"0001", "Один",
"0002", "Два",
"0003", "Три",
"0004", "Четыре",
"0005", "Пять",
"0006", "Нулевая точка",
"0007", "Точка один",
"0008", "Точка вторая",
"0009", "Точка три",
"0010", "Точка четыре",
"0011", "Пятая точка",
"0012", "Точка шесть",
"0013", "Точка семь",
"0014", "Восьмая точка",
"0015", "Точка девять",
"0021", "Предупреждение",
"0022", "Ошибка",
"0023", "Тревога",
"0024", "Ноги",
"0025", "Нога",
"0026", "Минус",
"0027", "",
"0028", "Приветствие",
"0029", "Предел",
"0030", "об/мин",
"0031", "Полетный аккумулятор разряжен",
"0032", "Радио Напряжение",
"0033", "Текущий",
"0034", "Высота",
"0035", "Точка",
"0036", "Вольт",
"0037", "Вольт",
"0038", "Минуты",
"0039", "Минута",
"0040", "Напряжение пакета",
"0041", "30 секунд",
"0042", "20 секунд",
"0043", "10 секунд",
"0044", "Процент",
"0045", "Тревога бездействия",
"0046", "Низкий заряд батареи радио",
"0047", "Градусы",
"0048", "Степень",
"0049", "Напряжение приемника",
"0050", "Температура",
"0051", "Ампер",
"0052", "Усилитель",
"0053", "Секунды",
"0054", "Второй",
"0055", "ДБ",
"0056", "Метры",
"0057", "Счетчик",
"0058", "Нет телеметрии",
"0059", "Низкое напряжение приемника",
"0060", "Предупреждение о температуре",
"0061", "Предупреждение о высоте",
"0062", "Ватт",
"0063", "Ватт",
"0064", "Узел",
"0065", "Узлы",
"0066", "Миллиампер",
"0067", "Миллиампер",
"0068", "Миллиампер в час",
"0069", "Миллиампер в час",
"0070", "Низкий радиочастотный сигнал",
"0071", "Критический радиочастотный сигнал",
"0072", "Сигнал приемника потерян",
"0073", "Предупреждение о разрядке батареи",
"0074", "Предупреждение о дроссельной заслонке",
"0075", "Предупреждение о переключении",
"0076", "Километры в час",
"0077", "",
"0078", "",
"0079", "",
"0080", "",
"0081", "",
"0082", "",
"0083", "",
"0084", "",
"0085", "",
"0086", "",
"0087", "",
"0088", "",
"0089", "",
"0090", "",
"0091", "",
"0092", "",
"0093", "",
"0094", "",
"0095", "",
"0096", "",
"0097", "",
"0098", "",
"0099", "",
"0100", "Сотня",
"0101", "Сто",
"0102", "Двести",
"0103", "Триста",
"0104", "Четыреста",
"0105", "Пятьсот",
"0106", "Шестьсот",
"0107", "Семь сотен",
"0108", "Восьмая сотня",
"0109", "Девятьсот",
"0110", "Тысяча",
"0111", "1 тысяча",
"0112", "2 тысячи",
"0113", "3 тысячи",
"0114", "4 тысячи",
"0115", "5 тысяч",
"0116", "6 тысяч",
"0117", "7 тысяч",
"0118", "8 тысяч",
"0119", "9 тысяч",
"0120", "10 тысяч",
"0121", "11 тысяч",
"0122", "12 тысяч",
"0123", "13 тысяч",
"0124", "14 тысяч",
"0125", "15 тысяч",
"0126", "16 тысяч",
"0127", "17 тысяч",
"0128", "18 тысяч",
"0129", "19 тысяч",
"0130", "20 тысяч",
"0131", "Дым включен",
"0132", "Выкури",
"0133", "Ворон включен",
"0134", "Ворона прочь",
"0135", "Двигатель выключен",
"0136", "Первое положение закрылков",
"0137", "Второе положение закрылков",
"0138", "Третье положение закрылков",
"0139", "",
"0140", "Закрылки опущены",
"0141", "",
"0142", "Полные закрылки",
"0143", "Мотор активен",
"0144", "Закрылки вверх",
"0145", "Закрылки 1",
"0146", "Закрылки 2",
"0147", "Закрылки 3",
"0148", "Дроссельная заслонка включена / Отсечка дроссельной заслонки неактивна",
"0149", "Дроссельная заслонка отключена/Отсечка дроссельной заслонки активна",
"0150", "Шасси поднято",
"0151", "Шасси опущено",
"0152", "Включен свет",
"0153", "Выкл. свет",
"0154", "Маяк включен",
"0155", "Маяк выключен",
"0156", "Строб включен",
"0157", "Выкл. Строб",
"0158", "Удержание газа неактивно",
"0159", "Удержание дроссельной заслонки активно",
"0160", "Отсечка дроссельной заслонки активна",
"0161", "Отсечка дроссельной заслонки неактивна",
"0162", "Низкая скорость элеронов",
"0163", "",
"0164", "Высокая скорость элеронов",
"0165", "Низкая скорость лифта",
"0166", "",
"0167", "Высокая скорость лифта",
"0168", "Готовься",
"0169", "Выключить передачу",
"0170", "Варио вкл",
"0171", "Варио выключен",
"0172", "Тепловой режим",
"0173", "Нормальный режим",
"0174", "Режим посадки",
"0175", "Акрорежим",
"0176", "Режим полета 1",
"0177", "Режим полета 2",
"0178", "Режим полета 3",
"0179", "Режим полета 4",
"0180", "Режим полета 5",
"0181", "Режим полета 6",
"0182", "Режим полета 7",
"0183", "Режим полета 8",
"0184", "Акро",
"0185", "Стабилизированный",
"0186", "Вернуться домой",
"0187", "Бродяга",
"0188", "Удержание курса",
"0189", "Удержание высоты",
"0190", "Удержание позиции",
"0191", "Скоростной режим",
"0192", "",
"0193", "",
"0194", "",
"0195", "Активен автоматический дроссель",
"0196", "Автоматический дроссель ВЫКЛ",
"0197", "",
"0198", "",
"0199", "Тренер включен",
"0200", "Тренер выключен",
"0201", "Сброс таймера 1",
"0202", "Сброс таймера 2",
"0203", "липо напряжение",
"0204", "Модель батареи",
"0260", "Изистар",
"0261", "Пико Куб",
"0262", "Экстра Гиперион",
"0263", "Трикоптер",
"0264", "Экстра ЛЕКИ",
"0265", "ASW28",
"0266", "Огненный дьявол",
"0267", "Мультиплекс Фокс",
"0268", "Заместитель",
"0269", "Квадрокоптер",
"0270", "Наземная скорость",
"0271", "Вертикальная скорость",
"0272", "широта",
"0273", "долгота",
"0274", "Высота",
"0275", "",
"0276", "Воздушная скорость",
"0277", "Заголовок",
"0278", "Направление",
"0279", "Рулон",
"0280", "Шаг",
"0281", "Рыскание",
"0282","",
"0283","",
"0284","",
"0285","",
"0286","",
"0287","",
"0288","",
"0289","",
"0290","",
"0291","",
"0292","",
"0293","",
"0294","",
"0295","",
"0296","",
"0297","",
"0298","",
"0299","",
"0300","",
"0301","",
"0302","",
"0303","",
"0304","",
"0305","",
"0306","",
"0307","",
"0308","",
"0309","",
"0310","",
"0311","",
"0312","",
"0313","",
"0314","",
"0315","",
"0316","",
"0317","",
"0318","",
"0319","",
"0320","",
"0321","",
"0322","",
"0323","",
"0324","",
"0325","",
"0326","",
"0327","",
"0328","",
"0329","",
"0330","",
"0331","",
"0332","",
"0333","",
"0334","",
"0335","",
"0336","",
"0337","",
"0338","",
"0339","",
"0340","",
"0341","",
"0342","",
"0343","",
"0344","",
"0345","",
"0346","",
"0347","",
"0348","",
"0349","",
"0350","",
"0351","",
"0352","",
"0353","",
"0354","",
"0355","",
"0356","",
"0357","",
"0358","",
"0359","",
"0360","",
"0361","",
"0362","",
"0363","",
"0364","",
"0365","",
"0366","",
"0367","",
"0368","",
"0369","",
"0370","",
"0371","",
"0372","",
"0373","",
"0374","",
"0375","",
"0376","",
"0377","",
"0378","",
"0379","",
"0380","",
"0381","",
"0382","",
"0383","",
"0384","",
"0385","",
"0386","",
"0387","",
"0388","",
"0389","",
"0390","",
"0391","",
"0392","",
"0393","",
"0394","",
"0395","",
"0396","",
"0397","",
"0398","",
"0399","",
"0400","0",
"0401","1",
"0402","2",
"0403","3",
"0404","4",
"0405","5",
"0406","6",
"0407","7",
"0408","8",
"0409","9",
"0410","10",
"0411","11",
"0412","12",
"0413","13",
"0414","14",
"0415","15",
"0416","16",
"0417","17",
"0418","18",
"0419","19",
"0420","20",
"0421","21",
"0422","22",
"0423","23",
"0424","24",
"0425","25",
"0426","26",
"0427","27",
"0428","28",
"0429","29",
"0430","30",
"0431","31",
"0432","32",
"0433","33",
"0434","34",
"0435","35",
"0436","36",
"0437","37",
"0438","38",
"0439","39",
"0440","40",
"0441","41",
"0442","42",
"0443","43",
"0444","44",
"0445","45",
"0446","46",
"0447","47",
"0448","48",
"0449","49",
"0450","50",
"0451","51",
"0452","52",
"0453","53",
"0454","54",
"0455","55",
"0456","56",
"0457","57",
"0458","58",
"0459","59",
"0460","60",
"0461","61",
"0462","62",
"0463","63",
"0464","64",
"0465","65",
"0466","66",
"0467","67",
"0468","68",
"0469","69",
"0470","70",
"0471","71",
"0472","72",
"0473","73",
"0474","74",
"0475","75",
"0476","76",
"0477","77",
"0478","78",
"0479","79",
"0480","80",
"0481","81",
"0482","82",
"0483","83",
"0484","84",
"0485","85",
"0486","86",
"0487","87",
"0488","88",
"0489","89",
"0490","90",
"0491","91",
"0492","92",
"0493","93",
"0494","94",
"0495","95",
"0496","96",
"0497","97",
"0498","98",
"0499","99"
);




// for($i=0;$i<count($soundlist_en);$i++)
// {
// 		if($i%2==1 && !empty($soundlist_en[$i]))
// 			echo $soundlist_en[$i]."\n";
// }


$dstlan="Tatyana";


$lan = $soundlist_ru;
for($i=0;$i < count($lan );$i+=2)
{
		if(empty($lan [$i+1]))
			continue;

		$data = "msg=".urlencode($lan [$i+1])."&lang=".$dstlan."&source=ttsmp3";
		var_dump($data);
		$resp = posturl("https://ttsmp3.com/makemp3_new.php",$data);
	
		var_dump($resp);
		echo "download ". $resp->URL . " \n";
		$mp3= geturl($resp->URL);
		file_put_contents($lan [$i].".mp3", $mp3);
		
                sleep(10);
}

//  * These Files might not be needed

// Files in RED must NOT have their file number changed

// Model names

// All the other files can have any available number (This could change)
