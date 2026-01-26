<?php
// Define email recipients
$toEmails = "nitin.gadkari@nic.in, pm@pmindia.gov.in, cm@maharashtra.gov.in, officeofmr@gov.in, acs@pwd.maharashtra.gov.in";
$ccEmails = "drm@bsl.railnet.gov.in, collector.buldhana@maharashtra.gov.in, sp.buldhana@mahapolice.gov.in, tahsildar.nandura@maharashtra.gov.in, nanduraco@gmail.com, ps.nandura.buld@mahapolice.gov.in, khamgaon.ee@mahapwd.com, nr.khadase@sansad.nic.in, makrandpatilofficial@gmail.com, chainsukh.sancheti.office@gmail.com, adv.akash@gmail.com, sanjaykute0027@gmail.com, nandurapublic@gmail.com";
$emails = $toEmails . "&cc=" . $ccEmails;

// JSON file to store click counts
$countFile = 'email_counts.json';

// Initialize count file if it doesn't exist
if (!file_exists($countFile)) {
    file_put_contents($countFile, json_encode(['total_clicks' => 0]));
}

// Handle count increment via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'increment') {
    $data = json_decode(file_get_contents($countFile), true);
    $data['total_clicks'] = ($data['total_clicks'] ?? 0) + 1;
    file_put_contents($countFile, json_encode($data));
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'count' => $data['total_clicks']]);
    exit;
}

// Get current count
$countData = json_decode(file_get_contents($countFile), true);
$currentCount = $countData['total_clicks'] ?? 0;

$emailContents = [
    'en' => [
        'subject' => 'Request for Alternative Bypass Road Instead of Proposed "T" Overbridge at Nandura Railway Gate and Repair & Expansion of Old Underpasses Instead of New Underpass',
        'body' => 'Sir/Madam,

We, the residents of Nandura village, are writing this email to express some serious concerns and suggest improvements regarding the proposed construction plan at the railway crossing in Nandura (Taluka - Nandura, District - Buldhana).

We have come to know that the current plan proposes the following two constructions:

1. Underpass - From Jalgaon Road side towards Nagpur as per current plan
2. "T" shaped Overbridge - From Jalgaon Road side to turn towards Nagpur-Mumbai highway

We have serious concerns about both these proposals and suggest alternative solutions.

**1. Request for Improvement Regarding Underpass Direction**

The current plan shows the underpass direction from Jalgaon Road side towards Nagpur. We humbly request that the old underpasses (old culverts) be repaired and expanded instead.

*Why is this necessary?*

1. *Preservation of Market Existence:* Nandura market is not only the lifeline of Nandura village but also serves the daily needs of 20-25 surrounding villages and supports the livelihoods of hundreds of families. Repairing and expanding the old underpasses (old culverts) will protect the interests of traders and customers in the market.

2. *Local Traffic Convenience:* Nandura residents use this route daily to reach the market. This will save time wasted due to railway crossing and eliminate safety concerns.

3. *Maintaining Economic Vitality:* Direct traffic access to the market will boost trade and improve the local economy.

4. *Alternative Route Availability:* Alternative routes are already available for going towards Nagpur, while this is the only direct route to reach the market, making it essential to prioritize market access.

**Detailed Request - Regarding Underpass:**

Instead of building a new underpass, we have an alternative and more practical request that **the existing old underpasses (old culverts) in the village be repaired, expanded, and made larger and more convenient for traffic.** This has several important benefits:

1. **Economic Efficiency:** Repairing and expanding the existing structure will be much more cost-effective than building a new underpass. Government funds will be used properly.

2. **Historical and Cultural Context:** The old culverts are part of the village\'s historical traffic system. Improving them instead of destroying them will preserve the village\'s history and memory.

3. **Time Saving:** The long duration required for new construction will be saved. Using the existing structure can complete the work faster.

4. **Traffic System Will Not Disrupt:** Major traffic disruptions during new construction can be avoided. It\'s easier to make alternative arrangements while working on old routes.

5. **Meeting Local Needs:** Since these old underpasses are in the center of the village, they will be extremely useful for direct access to the market. Their expansion will allow for two-way traffic use.

Therefore, instead of building a new underpass, *repairing, cleaning, widening, and expanding the existing old underpasses (culverts)* is a more viable, cost-effective, and useful option for locals, we suggest.

**2. Request for Alternative Plan Regarding "T" Overbridge**

The "T" overbridge construction will come directly in the middle of Nandura market (Market Yard). Serious consequences of this:

*   *Disrupting Market Structure:* The pillars of the overbridge will disrupt the current market structure.

*   *Economic Loss:* Hundreds of shops, carts, and commercial establishments will face crisis.

*   *Traffic Congestion:* The area will become crowded and dangerous due to traffic on and below the overbridge.

*   *Waste of Government Expenditure:* The government has already spent thousands of crores to build excellent roads at this location. The overbridge will waste this expenditure.

*Therefore our demand:*

The "T" overbridge construction should be *completely cancelled*.

*Alternative Solution:*

Instead of the "T" overbridge, create a *bypass road from the outskirts of Nandura village* that will directly connect Jalgaon Road to the Nagpur-Mumbai highway.

*Benefits of Bypass:*

1. *Market Will Remain Safe:* The existence of the market will not be endangered.

2. *Long-distance Traffic Will Be Resolved:* Long-distance traffic will pass through the bypass road.

3. *Local Traffic Will Be Easy:* Traffic in the village and market will reduce.

4. *Safety Will Increase:* A safe environment will be created for pedestrians, bicycles, bullock carts, and local vehicles.

5. *Future-proof Solution:* Considering population growth and traffic increase, bypass will be a more sustainable solution.

**3. Summary of Entire Plan and Final Request**

1. *Improve Underpass Plan:* Instead of building a new underpass, **repair, expand, and widen the existing old underpasses (culverts)** and make their use easier.

2. *Cancel "T" Overbridge:* Cancel the construction completely.

3. *Create Bypass Road:* Create an alternative bypass road from the outskirts of Nandura village.

We, all Nandura villagers, traders, farmers, youth, and common citizens, make this request. To avoid potential damage to our village\'s economic lifeline (market) and for the benefit of the general public, we request serious consideration of this request.

We suggest that concerned officials visit Nandura, conduct site inspection, and listen to the opinions of local people in this regard.

*We hope that our serious concern and suggested alternative plan will be considered and the right decision will be made, so that unemployment does not increase and market damage is avoided.*

*Thank you,*

*Yours sincerely,*

*On behalf of Nandura villagers,*

*Note:* I am sending this email based on my own thoughts and from the perspective of Nandura villagers\' interests. The opinions expressed herein are my personal and collective interests.'
    ],
    'hi' => [
        'subject' => 'नांदुरा रेलवे गेट पर प्रस्तावित "T" ओवरब्रिज के बजाय वैकल्पिक बायपास सड़क और नए अंडरपास के बजाय पुराने अंडरपास की मरम्मत और विस्तार की अनुरोध',
        'body' => 'महोदय/महोदया,

हम नांदुरा गांव के निवासी, नांदुरा (तहसील - नांदुरा, जिला - बुलढाणा) में रेलवे फाटक पर प्रस्तावित निर्माण योजना के संबंध में कुछ गंभीर चिंताओं और सुधार के सुझाव व्यक्त करने के लिए इस ईमेल के माध्यम से लिख रहे हैं।

हमें विश्वास के साथ पता चला है कि वर्तमान योजना के अनुसार निम्नलिखित दो निर्माण प्रस्तावित हैं:

1. अंडरपास (भूमिगत मार्ग) - वर्तमान योजना के अनुसार जलगांव रोड से नागपुर की ओर
2. "T" आकार का ओवरब्रिज - जलगांव रोड से नागपुर-मुंबई हाईवे पर मुड़ने के लिए

इन दोनों प्रस्तावों के बारे में हमारी गंभीर चिंताएं हैं और हम उनके लिए वैकल्पिक समाधान सुझाते हैं।

**1. अंडरपास की दिशा के संबंध में सुधार अनुरोध**

वर्तमान योजना में अंडरपास की दिशा जलगांव रोड से नागपुर की ओर दिखाई दे रही है। हम विनम्रता से अनुरोध करते हैं कि पुराने अंडरपास (पुराने कल्वर्ट) की मरम्मत और विस्तार किया जाए।

*यह आवश्यक क्यों है?*

1. *बाजार अस्तित्व की सुरक्षा:* नांदुरा बाजार केवल नांदुरा गांव का ही नहीं, बल्कि आसपास के 20-25 गांवों के लोगों की दैनिक जरूरतों और सैकड़ों परिवारों की आजीविका का आधार है। पुराने अंडरपास (पुराने कल्वर्ट) की मरम्मत और विस्तार से बाजार में व्यापारियों और ग्राहकों के हित सुरक्षित रहेंगे।

2. *स्थानीय यातायात सुविधा:* नांदुरा गांव के निवासी रोजाना बाजार तक पहुंचने के लिए इस मार्ग का उपयोग करते हैं। रेलवे फाटक के कारण होने वाले समय की बर्बादी और असुरक्षा से छुटकारा मिलेगा।

3. *आर्थिक जीवंतता बनाए रखना:* बाजार तक सीधा यातायात मार्ग उपलब्ध होने से व्यापार को बढ़ावा मिलेगा और स्थानीय अर्थव्यवस्था में सुधार होगा।

4. *वैकल्पिक मार्ग उपलब्धता:* नागपुर जाने के लिए पहले से ही अन्य मार्ग उपलब्ध हैं, जबकि बाजार जाने के लिए यह एकमात्र सीधा मार्ग है, इसलिए बाजार को प्राथमिकता देना आवश्यक है।

**विस्तृत अनुरोध - अंडरपास के संबंध में:**

नए अंडरपास का निर्माण करने के बजाय, हमारा एक वैकल्पिक और अधिक व्यावहारिक अनुरोध है कि **गांव में मौजूद पुराने अंडरपास (पुराने कल्वर्ट) की मरम्मत, विस्तार और चौड़ाई करके उन्हें बड़ा और यातायात के लिए अधिक सुविधाजनक बनाया जाए।** इसके कई महत्वपूर्ण लाभ हैं:

1. **आर्थिक दक्षता:** मौजूदा संरचना की मरम्मत और विस्तार करना नए अंडरपास बनाने से कहीं अधिक किफायती होगा। सरकारी धन का उचित उपयोग होगा।

2. **ऐतिहासिक और सांस्कृतिक संदर्भ:** पुराने कल्वर्ट गांव के ऐतिहासिक यातायात व्यवस्था का हिस्सा हैं। उन्हें नष्ट करने के बजाय सुधारने से गांव का इतिहास और स्मृति संरक्षित रहेगी।

3. **समय की बचत:** नए निर्माण में लगने वाला लंबा समय बच जाएगा। मौजूदा संरचना का उपयोग करके काम जल्दी पूरा हो सकता है।

4. **यातायात व्यवस्था बाधित नहीं होगी:* नए निर्माण की अवधि में होने वाले बड़े पैमाने पर यातायात बाधाएं टाली जा सकती हैं। पुराने मार्गों पर काम चलने के दौरान वैकल्पिक व्यवस्था करना आसान होगा।

5. **स्थानीय जरूरतों को पूरा करना:* ये पुराने अंडरपास गांव के मध्य भाग में होने के कारण, बाजार तक सीधी पहुंच के लिए अत्यंत उपयोगी साबित होंगे। उनके विस्तार से दोनों दिशाओं में यातायात के लिए भी उपयोग किया जा सकेगा।

इसलिए, नए अंडरपास का निर्माण करने के बजाय *मौजूदा पुराने अंडरपास (कल्वर्ट) की मरम्मत, सफाई, चौड़ाईकरण और विस्तार* करना स्थानीय लोगों के लिए अधिक व्यावहारिक, किफायती और उपयोगी विकल्प है, हम सुझाते हैं।

**2. "T" ओवरब्रिज के संबंध में वैकल्पिक योजना अनुरोध**

"T" ओवरब्रिज का निर्माण सीधे *नांदुरा बाजार (मार्केट यार्ड) के मध्य भाग* में आ रहा है। इससे होने वाले गंभीर परिणाम:

*   *बाजार संरचना को तोड़ना:* ओवरब्रिज के खंभों के कारण बाजार की वर्तमान संरचना टूट जाएगी।

*   *आर्थिक नुकसान:* सैकड़ों दुकानें, ठेले और व्यावसायिक संस्थानों पर संकट आएगा।

*   *यातायात जाम:* ओवरब्रिज पर और नीचे की ओर के यातायात के कारण पूरा क्षेत्र भीड़भाड़ और खतरनाक केंद्र बन जाएगा।

*   *सरकारी खर्च की बर्बादी:* इस स्थान पर पहले ही सरकार ने हजारों करोड़ रुपये खर्च करके उत्कृष्ट सड़कें बनाई हैं। ओवरब्रिज से इस खर्च की बर्बादी होगी।

*इसलिए हमारी मांग:*

"T" ओवरब्रिज का निर्माण *पूरी तरह रद्द* किया जाए।

*वैकल्पिक समाधान:*

"T" ओवरब्रिज के बजाय *नांदुरा गांव की सीमा से बायपास सड़क* बनाई जाए जो जलगांव रोड को सीधे नागपुर-मुंबई हाईवे से जोड़ेगी।

*बायपास के लाभ:*

1. *बाजार सुरक्षित रहेगा:* बाजार का अस्तित्व खतरे में नहीं पड़ेगा।

2. *लंबी दूरी का यातायात हल होगा:* बायपास सड़क से लंबी दूरी का यातायात निकल जाएगा।

3. *स्थानीय यातायात आसान होगा:* गांव और बाजार में राहदारी कम होगी।

4. *सुरक्षा बढ़ेगी:* पैदल यात्री, साइकिल, बैलगाड़ी और स्थानीय वाहनों के लिए सुरक्षित वातावरण बनेगा।

5. *भविष्योन्मुख समाधान:* जनसंख्या वृद्धि और यातायात वृद्धि को ध्यान में रखते हुए बायपास अधिक टिकाऊ समाधान साबित होगा।

**3. संपूर्ण योजना का सारांश और अंतिम अनुरोध**

1. *अंडरपास योजना सुधारें:* नए अंडरपास बनाने के बजाय मौजूद **पुराने अंडरपास (कल्वर्ट) की मरम्मत, विस्तार और चौड़ाईकरण** करके उनका उपयोग आसान बनाएं।

2. *"T" ओवरब्रिज रद्द करें:* निर्माण पूरी तरह रद्द करें।

3. *बायपास सड़क बनाएं:* नांदुरा गांव सीमा से वैकल्पिक बायपास सड़क बनाएं।

हम सभी नांदुरा ग्रामीण, व्यापारी, किसान, युवा और सामान्य नागरिकों की ओर से यह अनुरोध करते हैं। हमारे गांव की आर्थिक रक्तवाहिनी (बाजार) पर होने वाले संभावित आघात से बचने के लिए और आम जनता के हित के लिए इस अनुरोध पर गंभीरता से विचार करें।

हम सुझाव देते हैं कि संबंधित अधिकारी नांदुरा आएं, स्थल निरीक्षण करें और इस संबंध में स्थानीय लोगों की राय सुनें।

*आशा है कि हमारी इस गंभीर चिंता और सुझाई गई वैकल्पिक योजना पर विचार करके उचित निर्णय लिया जाएगा, ताकि बेरोजगारी की समस्या न बढ़े और बाजार का नुकसान न हो।*

*धन्यवाद,*

*विनम्र,*

*नांदुरा ग्रामीणों की ओर से,*

*नोट:* मैं यह ईमेल अपने विचार और नांदुरा ग्रामीणों के हित के दृष्टिकोण से भेज रहा हूं। इसमें व्यक्त किए गए विचार मेरे व्यक्तिगत और सामूहिक हित के हैं।'
    ],
    'mr' => [
        'subject' => 'ईमेल विषय: नांदुरा रेल्वे गेट ठिकाणीच्या प्रस्तावित "T" ओव्हरब्रीज ऐवजी पर्यायी बायपास रस्त्याच्या व नवीन अंडरपास ऐवजी जुन्या अंडरपासाची (जुन्या मोरींची) दुरुस्ती व विस्तार योजनेची विनंती',
        'body' => 'महोदय/महोदया,

नांदुरा (तालुका – नांदुरा, जिल्हा – बुलढाणा) येथील रेल्वे फाटक या ठिकाणी प्रस्तावित बांधकाम योजनेबाबत आम्ही नांदुरा गावातील रहिवासी या ईमेलद्वारे काही गंभीर शंका आणि सुधारणा सुचविणारी विनंती करीत आहोत.

आम्हाला विश्वासार्थ माहिती मिळाली आहे की सध्याच्या योजनेनुसार खालील दोन बांधकामे प्रस्तावित आहेत:

१. अंडरपास (भुयारी मार्ग) - सध्याच्या योजनेनुसार जळगाव जा. रोड कडून नागपूरकडे
२. "T" आकाराचा ओव्हरब्रीज - जळगाव जा. रोड कडून नागपूर-मुंबई महामार्गावर वळण्यासाठी

या दोन्ही प्रस्तावांबाबत आमच्याकडे गंभीर चिंता आहेत आणि त्यांसाठी पर्यायी उपाययोजना सुचवित आहोत.

**१. अंडरपासाच्या दिशेबाबत सुधारणा विनंती**

सध्याच्या योजनेत अंडरपासाची दिशा जळगाव जा. रोड कडून नागपूरकडे असल्याचे दिसते. आमची विनम्र विनंती आहे की ही जुन्या अंडरपासाची (जुन्या मोरींची) दुरुस्ती व विस्तार करावी.

*हे का आवश्यक आहे?*

१. बाजारपेठेचे अस्तित्व रक्षण: नांदुरा बाजारपेठ ही केवळ नांदुरा गावाचीच नव्हे तर आजूबाजूच्या २०-२५ गावांच्या लोकांच्या दैनंदिन गरजा भागवणारी आणि शेकडो कुटुंबांच्या उपजीविकेचा आधार आहे. जुन्या अंडरपासाची (जुन्या मोरींची) दुरुस्ती व विस्तार केल्यास बाजारातील व्यापाऱ्यांचे आणि ग्राहकांचे हित सुरक्षित राहील.

२. स्थानिक वाहतूक सोय: नांदुरा गावातील रहिवाशी दररोज बाजारापर्यंत येण्यासाठी या मार्गाचा वापर करतात. रेल्वे फाटकामुळे होणारा वेळेचा अपव्यय आणि असुरक्षितता यातून सुटका मिळेल.

३. आर्थिक चैतन्य राखणे: बाजाराकडे थेट वाहतूक मार्ग उपलब्ध झाल्यास व्यापार वाढीस चालना मिळेल आणि स्थानिक अर्थव्यवस्था सुधारेल.

४. पर्यायी मार्ग उपलब्धता: नागपूरकडे जाण्यासाठी आधीपासूनच इतर मार्ग उपलब्ध आहेत, तर बाजाराकडे जाण्यासाठी हा एकमेव थेट मार्ग असल्याने तो प्राधान्याने बाजाराकडे नेणे गरजेचे आहे.

**सविस्तर विनंती - अंडरपास बाबत:**

नवीन अंडरपास बांधण्याऐवजी, आमची एक पर्यायी व अधिक व्यावहारिक विनंती आहे की **सध्याच्या गावात असलेल्या जुन्या अंडरपासाची (जुन्या मोरींची) दुरुस्ती व विस्तार करून ते मोठे आणि वाहतूकसाठी अधिक सोयीस्कर केले जावेत.** याचे काही महत्त्वाचे फायदे आहेत:

१. आर्थिक कार्यक्षमता: नवीन अंडरपास बांधण्यापेक्षा विद्यमान रचना दुरुस्त करणे व विस्तार देणे खूपच किफायतशीर ठरेल. सरकारच्या निधीचा योग्य वापर होईल.

२. ऐतिहासिक व सांस्कृतिक संदर्भ: जुन्या मोऱ्या गावाच्या ऐतिहासिक वाहतूक व्यवस्थेचा भाग आहेत. त्यांना नष्ट करण्याऐवजी सुधारणे केल्यास गावाचा इतिहास व स्मृती जपली जाईल.

३. वेळेची बचत: नवीन बांधकामासाठी लागणारा मोठा कालावधी यामुळे वाचेल. विद्यमान रचना वापरल्यास काम लवकर पूर्ण होऊ शकते.

४. वाहतूक व्यवस्था ढासळणार नाही: नवीन बांधकामाच्या कालावधीत होणारे मोठ्या प्रमाणावरील वाहतूक अडथळे टाळता येतील. जुन्या मार्गांवर काम सुरू असताना पर्यायी व्यवस्था करणे सोपे जाईल.

५. स्थानिक गरजा पूर्ण करणे: हे जुने अंडरपास गावाच्या मध्यभागी असल्याने, बाजारपेठेपर्यंत थेट पोहोचण्यासाठी ते अत्यंत उपयुक्त ठरतील. त्यांचा विस्तार केल्यास ते दुतर्फी वाहतूकसाठीही वापरता येतील.

म्हणून, नवीन अंडरपास बांधण्यापेक्षा विद्यमान जुन्या अंडरपासांची (मोऱ्यांची) दुरुस्ती, साफसफाई, रुंदीकरण व विस्तार करणे हा अधिक व्यावहार्य, किफायतशीर आणि स्थानिकांसाठी उपयुक्त पर्याय आहे, असे आम्ही सुचवितो.

**२. "T" ओव्हरब्रीजबाबत पर्यायी योजना विनंती**

"T" ओव्हरब्रीजचे बांधकाम थेट नांदुरा बाजारपेठेच्या (मार्केट यार्ड) मध्यभागी येणार आहे. यामुळे होणारे गंभीर परिणाम:

*   बाजारपेठेची रचना मोडणे: ओव्हरब्रीजच्या खांबांमुळे बाजारपेठेची सध्याची रचना मोडली जाईल.

*   आर्थिक नुकसान: शेकडो दुकाने, ठेल्या आणि व्यावसायिक संस्थांवर संकट येईल.

*   वाहतूक गुंतागुंत: ओव्हरब्रीजवरील आणि खालच्या बाजूच्या वाहतुकीमुळे संपूर्ण क्षेत्र गर्दीचे आणि धोकादायक केंद्र बनेल.

*   शासनाच्या खर्चाचा अपव्यय: या ठिकाणी याआधी शासनाने हजारो कोटी रुपये खर्चून उत्तम रस्ते बांधले आहेत. ओव्हरब्रीजमुळे त्या खर्चाचा अपव्यय होईल.

*म्हणून आमची मागणी:*

"T" ओव्हरब्रीजचे बांधकाम पूर्णपणे रद्द करावे.

*पर्यायी उपाय:*

"T" ओव्हरब्रीज ऐवजी नांदुरा गावाच्या सीमेवरून बायपास रस्ता तयार करावा जो जळगाव जा. रोडला थेट नागपूर-मुंबई महामार्गाशी जोडेल.

*बायपासचे फायदे:*

१. बाजारपेठ सुरक्षित राहील: बाजारपेठेचे अस्तित्व धोक्यात येणार नाही.

२. दीर्घ पल्ल्याची वाहतूक सुटेल: बायपास रस्त्यावरून दीर्घ पल्ल्याची वाहतूक निघून जाईल.

३. स्थानिक वाहतूक सुलभ होईल: गावातील आणि बाजारातील रहदारी कमी होईल.

४. सुरक्षा वाढेल: पादचारी, सायकल्स, बैलगाड्या आणि स्थानिक वाहनांसाठी सुरक्षित वातावरण निर्माण होईल.

५. भविष्यसूचक उपाय: लोकसंख्या वाढ आणि वाहतूक वाढ लक्षात घेता बायपास हा अधिक टिकाऊ उपाय ठरेल.

**३. संपूर्ण योजनेचा सारांश व अंतिम विनंती**

१. अंडरपास योजना सुधारावी: नवीन अंडरपास बांधण्याऐवजी विद्यमान जुन्या अंडरपासांची (मोऱ्यांची) दुरुस्ती, विस्तार व रुंदीकरण करून त्यांचा वापर सुलभ करावा.

२. "T" ओव्हरब्रीज रद्द करावा: पूर्णपणे बांधकाम रद्द करावे.

३. बायपास रस्ता तयार करावा: नांदुरा गाव सीमेवरून पर्यायी बायपास रस्ता तयार करावा.

आम्ही सर्व नांदुरा ग्रामस्थ, व्यापारी, शेतकरी, युवक आणि सामान्य नागरिक यांच्या वतीने ही विनंती करतो. आमच्या गावाच्या आर्थिक रक्तवाहिन्या (बाजारपेठ) वर होणारा संभाव्य आघात टाळण्यासाठी आणि सर्वसामान्य जनतेच्या हितासाठी या विनंतीचा गंभीरतेने विचार करावा.

या संदर्भात संबंधित अधिकाऱ्यांनी नांदुरा येथे येऊन स्थळनिरीक्षण करावे आणि स्थानिक लोकांच्या मतांचे श्रवण करावे, असे आम्ही सुचवितो.

आशा आहे की, आमच्या या गंभीर चिंतेचा आणि सुचविलेल्या पर्यायी योजनेचा विचार करून योग्य निर्णय घेण्यात येईल. जेणेकरून बेरोजगारीची समस्या वाढणार नाही व बाजारपेठेचे होणारे नुकसान होणार नाही.

धन्यवाद,

विनम्र,

नांदुरा ग्रामस्थांच्या वतीने,

टीप: हा ई-मेल मी माझ्या स्वत:च्या विचाराने आणि नांदुरा ग्रामस्थांच्या हिताच्या दृष्टिकोनातून पाठवत आहे. यात व्यक्त केलेले मत माझे वैयक्तिक आणि सामूहिक हिताचे आहे.'
    ]
];

// Set default language
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
if (!in_array($lang, ['en', 'hi', 'mr'])) {
    $lang = 'en';
}

// Get current email content
$currentEmail = $emailContents[$lang];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Now Button</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        
        .email-container {
            text-align: center;
        }
        
        .email-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        
        .email-button {
            background-color: #97BD59;
            border: none;
            color: white;
            padding: 12px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        
        .email-button:hover {
            background-color: #45a049;
            transform: t
