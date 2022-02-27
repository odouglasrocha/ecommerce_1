-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Fev-2022 às 15:34
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allusers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `product`, `slider`, `coupons`, `shipping`, `blog`, `setting`, `returnorder`, `review`, `blog_review`, `orders`, `reports`, `stock`, `allusers`, `adminuserrole`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(13, 'Admin', 'admin@admin.com', '2022-02-27 16:47:24', '$2y$10$ry9ZBSiRT560MuzAPwcnYOH1QdpnJSHle.uBb6idWhFW9q11AOICi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'omEIxNLuKV', NULL, NULL, '2022-02-27 16:47:24', '2022-02-27 16:47:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_hi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `post_title_en`, `post_title_hi`, `post_slug_en`, `post_slug_hi`, `post_image`, `post_details_en`, `post_details_hi`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Best 13-Inch Laptops of 2021', '2021 के सर्वश्रेष्ठ 13 इंच के लैपटॉप', 'the-best-13-inch-laptops-of-2021', '2021-के-सर्वश्रेष्ठ-13-इंच-के-लैपटॉप', 'upload/blog/1708327425555185.jpg', 'Laptops are increasingly capable of providing ample processing capabilities in smaller form factors. As such, you don&rsquo;t have to sacrifice power for portability. While tablets can be convenient for use on the go, a laptop with a built-in keyboard offers unrivaled ease of use.&nbsp; \r\nAlthough a large screen can be great for productivity, massive 17-inch or even 15-inch screens can add quite a bit of heft to a laptop. With a 13-inch laptop, you can use the built-in screen while out and about, and an external monitor while at home or the office. Thus, a 13-inch laptop is a compelling choice, especially for frequent travelers.&nbsp;\r\n\r\nPreviously, we&nbsp;<a href=\"https://www.entrepreneur.com/slideshow/375935\" rel=\"follow\" target=\"_self\">broke down the best laptops for business</a>&nbsp;to help you keep working on the go. We&rsquo;ve curated the best 13-inch laptops for all uses, from small gaming laptops to budget options and everything between.', '\r\nलैपटॉप छोटे रूप कारकों में पर्याप्त प्रसंस्करण क्षमता प्रदान करने में तेजी से सक्षम हैं। जैसे, आपको पोर्टेबिलिटी के लिए शक्ति का त्याग करने की आवश्यकता नहीं है। जबकि टैबलेट चलते-फिरते उपयोग के लिए सुविधाजनक हो सकते हैं, एक अंतर्निहित कीबोर्ड वाला लैपटॉप उपयोग में बेजोड़ आसानी प्रदान करता है।\r\n\r\nहालाँकि उत्पादकता के लिए एक बड़ी स्क्रीन बहुत अच्छी हो सकती है, 17-इंच या 15-इंच की बड़ी स्क्रीन एक लैपटॉप में काफी कुछ जोड़ सकती है। 13 इंच के लैपटॉप के साथ, आप बाहर और आसपास के समय में अंतर्निर्मित स्क्रीन का उपयोग कर सकते हैं, और घर या कार्यालय में बाहरी मॉनिटर का उपयोग कर सकते हैं। इस प्रकार, 13 इंच का लैपटॉप एक सम्मोहक विकल्प है, खासकर अक्सर यात्रियों के लिए।\r\n\r\nपहले, हमने आपको चलते-फिरते काम करने में मदद करने के लिए व्यवसाय के लिए सबसे अच्छे लैपटॉप को तोड़ दिया था। हमने छोटे गेमिंग लैपटॉप से ​​लेकर बजट विकल्पों और बीच में सब कुछ, सभी उपयोगों के लिए सर्वश्रेष्ठ 13-इंच के लैपटॉप को क्यूरेट किया है।', '2021-08-17 02:43:10', NULL),
(2, 4, 'How I went from selling food in the street to working for top firms in tech', 'मैं गली में खाना बेचने से लेकर टेक में शीर्ष फर्मों के लिए काम करने तक कैसे गया?', 'how-i-went-from-selling-food-in-the-street-to-working-for-top-firms-in-tech', 'मैं-गली-में-खाना-बेचने-से-लेकर-टेक-में-शीर्ष-फर्मों-के-लिए-काम-करने-तक-कैसे-गया?', 'upload/blog/1708334763836626.jpeg', '<p style=\"text-align:justify\">In this series of articles I want to share with you how I got into the world of programming. I never went to university to study IT, but I found a way around it. If you like the series and want to see a book out of this, please leave a comment below.</p>\r\n\r\n<p style=\"text-align:justify\">At the end of 2006, I arrived at a crossroads in my life. My hopes of becoming a secondary school linguistics teacher had vanished in an instant, as several factors had come together and made it impossible for me to continue with my studies.</p>\r\n\r\n<p style=\"text-align:justify\">Back in my hometown of Durazno, Uruguay, my wife was working long hours for a meager $160 (USD) a month. Yes, that&rsquo;s $1,920 a year. We had sacrificed our time together so I could become a teacher and get a better job because we were dreaming of a better future.</p>\r\n\r\n<p style=\"text-align:justify\">The problem with dreams is they tend to vanish when you wake up, and life&rsquo;s alarm clock had just gone off.</p>\r\n\r\n<p style=\"text-align:justify\">Because my career trajectory had suddenly strayed off course, I moved back to my hometown to figure out my next steps. Needless to say, I was depressed at the way things were, and our living situation only made things worse. It was good to be back with my wife, but the reasons for it were stressful.</p>\r\n\r\n<p style=\"text-align:justify\">Additionally, we were sharing a house with my wife&rsquo;s aunt, so our privacy was restricted to our bedroom, and we always felt like we were overstaying our welcome.</p>\r\n\r\n<p style=\"text-align:justify\">As a way to bring in extra income, we tried to sell homemade pasta on the streets. I would go door-to-door collecting orders for the weekend. &ldquo;Hello, do you want to order ravioli to eat this Sunday?&rdquo; I&rsquo;d ask person after person. &ldquo;Yes, they&rsquo;re homemade. Just give us a time and we&rsquo;ll deliver them.&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">Then, after people ordered them, we spent our entire weekends making 2,000 ravioli only to end up with 500 pesos in our pockets, which comes about $20, not counting expenses.</p>\r\n\r\n<p style=\"text-align:justify\">The whole situation was disheartening, and it made us feel hopeless. My wife would work hard all week, then come home only to spend her weekends helping me prepare the ravioli. She couldn&rsquo;t even have one day of the weekend for herself. She begged me to stop selling ravioli, even if that meant we would end up with less money to pay our bills. Eventually I agreed, but it meant I had to try to find a job &mdash; and finding a job wasn&rsquo;t so easy in our rural hometown. Anxiety and desperation were starting to set in.</p>\r\n\r\n<p style=\"text-align:justify\">One night, I was talking with a friend who was studying computer engineering at the university in Montevideo. He told me about the various job opportunities one could find in the capital city, with salaries that were the stuff of dreams for someone living in the countryside. &ldquo;There&rsquo;s this big company in Montevideo, Live Interactive,&rdquo; he told me. &ldquo;They&rsquo;re always looking for programmers; maybe you could try to get a job there. They pay really well.&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">The salary he mentioned was around three times what we were making at the time, and I couldn&rsquo;t help but imagine all the things we could do with that much money. We wouldn&rsquo;t need to worry anymore about putting food on the table. We could finally pay for our own internet connection, get proper clothes and shoes, and even have our own washing machine!</p>\r\n\r\n<p style=\"text-align:justify\">Not only that, but I already had experience with computers. I always liked working with them, mostly because they appealed to my knack for problem solving. Programming reminded me of having to crack a code or find the solution to a difficult puzzle &mdash; but in addition to being challenging, it was fun. What&rsquo;s more is that I saw programming as a career with a lot of potential for growth.</p>\r\n\r\n<p style=\"text-align:justify\">But there was one small problem: to work as a computer programmer, one usually needs to know how to program computers. Me? I could install Linux on my own, but that was probably the extent of it.</p>\r\n\r\n<p style=\"text-align:justify\">How do you land a job as a computer programmer when you have almost no programming experience and you lack a university degree to prove your knowledge? How do you learn to program without internet access at home, without mentors to connect with, and without access to programming books? That was my problem back in 2006, and this is the story of how I tackled it.</p>', '<pre style=\"text-align:justify\">\r\nलेखों की इस श्रृंखला में मैं आपके साथ साझा करना चाहता हूं कि मैं प्रोग्रामिंग की दुनिया में कैसे आया। मैं आईटी का अध्ययन करने के लिए कभी विश्वविद्यालय नहीं गया, लेकिन मुझे इसके आसपास एक रास्ता मिल गया। यदि आपको यह श्रंखला पसंद है और आप इसमें से कोई पुस्तक देखना चाहते हैं, तो कृपया नीचे एक टिप्पणी छोड़ दें।\r\n२००६ के अंत में, मैं अपने जीवन में एक चौराहे पर आ गया। माध्यमिक विद्यालय के भाषाविज्ञान शिक्षक बनने की मेरी उम्मीदें पल भर में ही गायब हो गई थीं, क्योंकि कई कारक एक साथ आ गए थे और मेरे लिए अपनी पढ़ाई जारी रखना असंभव बना दिया था।\r\nमेरे गृहनगर, उरुग्वे में वापस, मेरी पत्नी एक महीने में केवल 160 डॉलर (यूएसडी) के लिए लंबे समय तक काम कर रही थी। हाँ, यह $1,920 प्रति वर्ष है। हमने एक साथ अपना समय बलिदान किया था ताकि मैं एक शिक्षक बन सकूं और एक बेहतर नौकरी पा सकूं क्योंकि हम एक बेहतर भविष्य का सपना देख रहे थे।\r\nसपनों के साथ समस्या यह है कि जब आप जागते हैं तो वे गायब हो जाते हैं, और जीवन की अलार्म घड़ी अभी ही बंद हो गई थी।\r\nक्योंकि मेरे करियर की गति अचानक से भटक गई थी, मैं अपने अगले कदमों का पता लगाने के लिए अपने गृहनगर वापस चला गया। कहने की जरूरत नहीं है कि जिस तरह से चीजें थीं, उससे मैं उदास था, और हमारे रहने की स्थिति ने ही चीजों को बदतर बना दिया। अपनी पत्नी के साथ वापस आकर अच्छा लगा, लेकिन इसके कारण तनावपूर्ण थे।\r\nइसके अतिरिक्त, हम अपनी पत्नी की मौसी के साथ एक घर साझा कर रहे थे, इसलिए हमारी गोपनीयता हमारे शयनकक्ष तक ही सीमित थी, और हमें हमेशा ऐसा लगता था कि हम अपने स्वागत से अधिक समय बिता रहे हैं।\r\nअतिरिक्त आय लाने के लिए, हमने सड़कों पर घर का बना पास्ता बेचने की कोशिश की। मैं सप्ताहांत के लिए घर-घर जाकर ऑर्डर लेने जाता था। &quot;नमस्कार, क्या आप इस रविवार को खाने के लिए रैवियोली ऑर्डर करना चाहते हैं?&quot; मैं एक के बाद एक व्यक्ति से पूछूंगा। &quot;हाँ, वे घर का बना हैं। बस हमें एक समय दें और हम उन्हें पूरा करेंगे।&quot;\r\nफिर, लोगों द्वारा उन्हें ऑर्डर करने के बाद, हमने अपना पूरा सप्ताहांत 2,000 रैवियोली बनाने में बिताया, जो हमारी जेब में 500 पेसो के साथ समाप्त हुआ, जो लगभग $ 20 आता है, खर्चों की गिनती नहीं। </pre>\r\n\r\n<pre>\r\nपूरी स्थिति निराशाजनक थी, और इसने हमें निराशाजनक महसूस कराया। मेरी पत्नी पूरे सप्ताह कड़ी मेहनत करती थी, फिर घर आकर केवल सप्ताहांत बिताने के लिए रैवियोली तैयार करने में मेरी मदद करती थी। वह अपने लिए वीकेंड का एक दिन भी नहीं निकाल पाती थी। उसने मुझसे रैवियोली बेचना बंद करने की भीख माँगी, भले ही इसका मतलब यह हो कि हमें अपने बिलों का भुगतान करने के लिए कम पैसे मिलेंगे। आखिरकार मैं सहमत हो गया, लेकिन इसका मतलब था कि मुझे नौकरी खोजने की कोशिश करनी पड़ी - और हमारे ग्रामीण गृहनगर में नौकरी ढूंढना इतना आसान नहीं था। घबराहट और हताशा का दौर शुरू हो गया था।\r\nएक रात, मैं एक दोस्त के साथ बात कर रहा था जो मोंटेवीडियो विश्वविद्यालय में कंप्यूटर इंजीनियरिंग की पढ़ाई कर रहा था। उन्होंने मुझे राजधानी शहर में नौकरी के विभिन्न अवसरों के बारे में बताया, वेतन के साथ जो ग्रामीण इलाकों में रहने वाले किसी व्यक्ति के लिए सपनों का सामान था। &quot;मोंटेवीडियो में यह बड़ी कंपनी है, लाइव इंटरएक्टिव,&quot; उन्होंने मुझे बताया। &quot;वे हमेशा प्रोग्रामर की तलाश में रहते हैं; शायद आप वहां नौकरी पाने की कोशिश कर सकते हैं। वे वास्तव में अच्छा भुगतान करते हैं। &rdquo;\r\nउन्होंने जिस वेतन का उल्लेख किया वह उस समय हम जो कमा रहे थे उससे लगभग तीन गुना था, और मैं मदद नहीं कर सकता था, लेकिन उन सभी चीजों की कल्पना कर सकता था जो हम इतने पैसे से कर सकते थे। अब हमें टेबल पर खाना रखने के बारे में चिंता करने की ज़रूरत नहीं होगी। हम अंततः अपने इंटरनेट कनेक्शन के लिए भुगतान कर सकते हैं, उचित कपड़े और जूते प्राप्त कर सकते हैं, और यहां तक ​​कि हमारी अपनी वॉशिंग मशीन भी हो सकती है!\r\nइतना ही नहीं, मुझे पहले से ही कंप्यूटर का अनुभव था। मैं हमेशा उनके साथ काम करना पसंद करता था, ज्यादातर इसलिए क्योंकि उन्होंने समस्या को हल करने के लिए मेरी आदत से अपील की। प्रोग्रामिंग ने मुझे एक कोड को क्रैक करने या एक कठिन पहेली का हल खोजने की याद दिला दी - लेकिन चुनौतीपूर्ण होने के अलावा, यह मजेदार था। क्या अधिक है कि मैंने प्रोग्रामिंग को एक करियर के रूप में देखा जिसमें विकास की बहुत संभावनाएं हैं।\r\nलेकिन एक छोटी सी समस्या थी: एक कंप्यूटर प्रोग्रामर के रूप में काम करने के लिए, आमतौर पर यह जानना आवश्यक है कि कंप्यूटर को कैसे प्रोग्राम किया जाता है। मैं? मैं अपने दम पर लिनक्स स्थापित कर सकता था, लेकिन शायद यही इसकी सीमा थी।\r\nजब आपके पास लगभग कोई प्रोग्रामिंग अनुभव नहीं है और आपके पास अपने ज्ञान को साबित करने के लिए विश्वविद्यालय की डिग्री नहीं है, तो आप कंप्यूटर प्रोग्रामर के रूप में नौकरी कैसे प्राप्त करते हैं? आप घर पर इंटरनेट एक्सेस के बिना, मेंटर्स के बिना, और प्रोग्रामिंग किताबों तक पहुंच के बिना प्रोग्राम करना कैसे सीखते हैं? 2006 में यही मेरी समस्या थी, और यह कहानी है कि मैंने इससे कैसे निपटा।</pre>', '2021-08-17 04:39:49', NULL),
(3, 3, 'The Psychology of Color in Marketing and Branding', 'विपणन और ब्रांडिंग में रंग का मनोविज्ञान', 'the-psychology-of-color-in-marketing-and-branding', 'विपणन-और-ब्रांडिंग-में-रंग-का-मनोविज्ञान', 'upload/blog/1708335461084845.png', '<p>The problem has always been depth of analysis. Color theory is a topic of complexity and nuance, but splashy infographics rarely go beyond See &lsquo;n Say levels of coverage.</p>\r\n\r\n<p><img alt=\"\" src=\"https://miro.medium.com/max/557/0*-ASHOuL-sHWeEE32.png\" style=\"height:134px; width:557px\" /></p>\r\n\r\n<p>Green Lantern can&rsquo;t turn lemons into lemonade and I&rsquo;m left equally unequipped to make smart decisions about the spectrum which shades our world. But&nbsp;<em>why</em>&nbsp;is such a potentially colorful conversation so unwaveringly shallow?&nbsp;</p>\r\n\r\n<h1>Common misconceptions about color</h1>\r\n\r\n<p>As&nbsp;<a href=\"http://www.ncbi.nlm.nih.gov/pubmed/2289687\" rel=\"noopener nofollow\">research shows</a>, it&rsquo;s likely because personal preference, experiences, upbringing, cultural differences, and context often muddy the effect individual colors have on us. So the idea that colors such as yellow or purple are able to evoke some sort of hyper-specific emotion is about as accurate as your standard palm reading.</p>\r\n\r\n<p>But there&rsquo;s still plenty to learn and consider if we humbly accept that concrete answers aren&rsquo;t a guarantee. The key is to look for practical ways to make decisions about color.</p>\r\n\r\n<h1>The importance of color in branding</h1>\r\n\r\n<p>First let&rsquo;s address branding, which is one of the more important issues relating to color perception and the area where many articles on this subject run into problems.</p>', '<pre>\r\nसमस्या हमेशा विश्लेषण की गहराई रही है। रंग सिद्धांत जटिलता और बारीकियों का विषय है, लेकिन स्पलैश इन्फोग्राफिक्स शायद ही कभी देखें &#39;एन कहें कवरेज के स्तर&#39; से आगे जाते हैं।\r\n\r\n<img alt=\"\" src=\"https://miro.medium.com/max/557/0*-ASHOuL-sHWeEE32.png\" style=\"height:134px; width:557px\" />\r\n\r\n\r\nहरा लालटेन नींबू को नींबू पानी में नहीं बदल सकता है और मैं उस स्पेक्ट्रम के बारे में स्मार्ट निर्णय लेने के लिए समान रूप से अक्षम हूं जो हमारी दुनिया को रंग देता है। लेकिन इतनी संभावित रूप से रंगीन बातचीत इतनी उथली क्यों है?\r\n\r\nरंग के बारे में आम भ्रांतियां\r\nजैसा कि शोध से पता चलता है, यह संभव है क्योंकि व्यक्तिगत पसंद, अनुभव, पालन-पोषण, सांस्कृतिक अंतर और संदर्भ अक्सर अलग-अलग रंगों का हम पर प्रभाव डालते हैं। तो यह विचार कि पीले या बैंगनी जैसे रंग किसी प्रकार की अति-विशिष्ट भावना पैदा करने में सक्षम हैं, आपके मानक हथेली पढ़ने के समान ही सटीक है।\r\n\r\nलेकिन सीखने और विचार करने के लिए अभी भी बहुत कुछ है यदि हम विनम्रतापूर्वक स्वीकार करते हैं कि ठोस उत्तर गारंटी नहीं हैं। रंग के बारे में निर्णय लेने के व्यावहारिक तरीकों की तलाश करना महत्वपूर्ण है।\r\n\r\nब्रांडिंग में रंग का महत्व\r\nआइए पहले ब्रांडिंग पर ध्यान दें, जो कि रंग धारणा और उस क्षेत्र से संबंधित अधिक महत्वपूर्ण मुद्दों में से एक है जहां इस विषय पर कई लेख समस्याओं में चलते हैं।</pre>', '2021-08-17 04:50:54', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `blog_category_name_en`, `blog_category_name_hi`, `blog_category_slug_en`, `blog_category_slug_hi`, `created_at`, `updated_at`) VALUES
(1, 'Tech', 'तकनीक', 'tech', 'तकनीक', NULL, NULL),
(3, 'Marketing', 'विपणन', 'marketing', 'विपणन', '2021-08-17 00:49:23', NULL),
(4, 'Food', 'खाना', 'food', 'खाना', '2021-08-17 01:04:22', '2021-08-17 04:40:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_reviews`
--

CREATE TABLE `blog_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog_reviews`
--

INSERT INTO `blog_reviews` (`id`, `blog_id`, `name`, `email`, `summary`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'RAHUL PALIWAL', 'rahulpaliwal177@gmail.com', 'nice product', 'test data', '1', '2021-08-19 04:40:55', NULL),
(2, 3, 'RAHUL PALIWAL', 'admin@gmail.com', 'nice product', 'testssetestt', '0', '2021-08-19 05:11:11', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_hi`, `brand_slug_en`, `brand_slug_hi`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'samsung', 'सैमसंग', 'samsung', 'सैमसंग', 'upload/brand/1703336558864842.jpg', NULL, NULL),
(2, 'Khana', 'खाना', 'khana', 'खाना', 'upload/brand/1703340966207915.jpg', NULL, '2021-06-23 01:52:28'),
(3, 'tasty bite', 'स्वादिष्ट खाना', 'tasty-bite', 'स्वादिष्ट-खाना', 'upload/brand/1703337124431383.jpg', NULL, NULL),
(7, 'Oppo', 'ओप्पो', 'oppo', 'ओप्पो', 'upload/brand/1703984700648720.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_hi`, `category_slug_en`, `category_slug_hi`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'इलेक्ट्रॉनिक', 'electronics', 'इलेक्ट्रॉनिक', 'fa fa-laptop', NULL, '2021-07-07 00:14:40'),
(2, 'Health and Beauty', 'आरोग्य और सुंदरता', 'health-and-beauty', 'आरोग्य-और-सुंदरता', 'fa fa-paw', NULL, '2021-07-07 00:16:23'),
(4, 'Sports and Outdoor', 'खेल और आउटडोर', 'sports-and-outdoor', 'खेल-और-आउटडोर', 'fa fa-asterisk', NULL, NULL),
(5, 'Home Appliances', 'घरेलु उपकरण', 'home-appliances', 'घरेलु-उपकरण', 'fa fa-bar-chart', NULL, NULL),
(8, 'Fashion', 'फैशन', 'fashion', 'फैशन', 'fa fa-shopping-bag', NULL, NULL),
(9, 'Sweet Home', 'प्यारा घर', 'sweet-home', 'प्यारा-घर', 'fa fa-home', NULL, '2021-06-30 01:27:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DIWALI', 22, '2021-09-10', 1, '2021-08-05 01:30:04', '2021-08-16 04:24:33'),
(3, 'XYZ', 10, '2021-08-15', 1, '2021-08-06 05:45:16', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(7, '2021_02_02_212221_create_admins_table', 2),
(8, '2021_06_21_095324_create_brands_table', 3),
(9, '2021_06_24_055315_create_categories_table', 4),
(10, '2021_06_25_041846_create_sub_categories_table', 5),
(11, '2021_06_25_072650_create_sub_sub_categories_table', 6),
(12, '2021_06_26_070258_create_products_table', 7),
(13, '2021_06_26_071547_create_multi_imgs_table', 7),
(14, '2021_07_05_091921_create_sliders_table', 8),
(15, '2021_07_29_103015_create_wishlists_table', 9),
(16, '2021_08_05_054204_create_coupons_table', 10),
(17, '2021_08_05_081538_create_ship_divisions_table', 11),
(18, '2021_08_05_084508_create_ship_districts_table', 12),
(19, '2021_08_05_101903_create_ship_states_table', 13),
(20, '2021_08_09_075322_create_shippings_table', 14),
(21, '2021_08_10_073318_create_orders_table', 15),
(22, '2021_08_10_073522_create_order_items_table', 15),
(23, '2021_08_17_055339_create_blog_post_categories_table', 16),
(24, '2021_08_17_064654_create_blog_posts_table', 17),
(25, '2021_08_18_054052_create_site_settings_table', 18),
(26, '2021_08_18_081959_create_seos_table', 19),
(27, '2021_08_19_061936_create_reviews_table', 20),
(28, '2021_08_19_093210_create_blog_reviews_table', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 3, 'upload/products/multi_image/1703986196558937.jpeg', '2021-06-30 04:41:11', NULL),
(2, 3, 'upload/products/multi_image/1703986197089947.jpeg', '2021-06-30 04:41:12', NULL),
(3, 3, 'upload/products/multi_image/1703986197705580.jpeg', '2021-06-30 04:41:12', NULL),
(4, 3, 'upload/products/multi_image/1703986198110979.jpeg', '2021-06-30 04:41:13', NULL),
(5, 4, 'upload/products/multi_image/1704058256328965.jpeg', '2021-06-30 23:46:33', NULL),
(6, 4, 'upload/products/multi_image/1704058256897612.jpeg', '2021-06-30 23:46:33', NULL),
(7, 4, 'upload/products/multi_image/1704058257534440.jpeg', '2021-06-30 23:46:34', NULL),
(8, 4, 'upload/products/multi_image/1704058258085812.jpeg', '2021-06-30 23:46:34', NULL),
(10, 6, 'upload/products/multi_image/1704059385884047.jpeg', '2021-07-01 00:04:30', NULL),
(11, 6, 'upload/products/multi_image/1705783616005756.jpg', '2021-07-01 00:04:31', '2021-07-20 00:50:25'),
(12, 7, 'upload/products/multi_image/1704242796157005.jpeg', '2021-07-03 00:39:44', NULL),
(13, 7, 'upload/products/multi_image/1704242796654512.jpeg', '2021-07-03 00:39:44', NULL),
(14, 7, 'upload/products/multi_image/1704242797093716.jpeg', '2021-07-03 00:39:44', NULL),
(18, 9, 'upload/products/multi_image/1705785061232274.jpeg', '2021-07-20 01:13:22', NULL),
(19, 9, 'upload/products/multi_image/1705785061847332.jpeg', '2021-07-20 01:13:23', NULL),
(20, 9, 'upload/products/multi_image/1705785062429706.jpeg', '2021-07-20 01:13:23', NULL),
(21, 10, 'upload/products/multi_image/1706234648151847.jpeg', '2021-07-25 00:19:22', NULL),
(22, 10, 'upload/products/multi_image/1706234648655809.jpeg', '2021-07-25 00:19:22', NULL),
(23, 10, 'upload/products/multi_image/1706234649178124.jpeg', '2021-07-25 00:19:23', NULL),
(24, 11, 'upload/products/multi_image/1706235028720660.jpeg', '2021-07-25 00:25:25', NULL),
(25, 11, 'upload/products/multi_image/1706235029383977.jpeg', '2021-07-25 00:25:25', NULL),
(26, 12, 'upload/products/multi_image/1706235307606661.jpeg', '2021-07-25 00:29:51', NULL),
(27, 12, 'upload/products/multi_image/1706235308121737.jpeg', '2021-07-25 00:29:51', NULL),
(28, 12, 'upload/products/multi_image/1706235308579745.jpeg', '2021-07-25 00:29:51', NULL),
(29, 13, 'upload/products/multi_image/1707047591556732.jpeg', '2021-08-02 23:40:45', NULL),
(30, 13, 'upload/products/multi_image/1707047592129079.jpeg', '2021-08-02 23:40:45', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `return_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 4, 3, 'User', 'user@gmail.com', '8958764244', 123243, 'TEST', 'card_1JMsBWSJZGOakkUN4G0iBMlu', 'Stripe', 'txn_3JMsBYSJZGOakkUN13bHAnIt', 'inr', 3330.00, '611254d51f1bd', 'ES92985196', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-10 04:58:38', NULL),
(2, 1, 7, 4, 3, 'RAHUL PALIWAL', 'user@gmail.com', '8958764244', 110084, 'TEST', 'card_1JMsIISJZGOakkUNazvid50g', 'Stripe', 'txn_3JMsIKSJZGOakkUN1lMn976F', 'inr', 1513.00, '611256792d111', 'ES16072849', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-10 05:05:39', NULL),
(3, 1, 7, 4, 3, 'Rahul', 'rahul@gmail.com', '8958764244', 263653, 'Test', 'card_1JMsjISJZGOakkUNt36wjQ01', 'Stripe', 'txn_3JMsjKSJZGOakkUN1el1knnq', 'inr', 1626.00, '61125d02e01e1', 'ES29754495', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-10 05:33:32', NULL),
(4, 1, 7, 4, 3, 'Rahul', 'rahul@gmail.com', '8958764244', 263653, 'Test', 'card_1JMslfSJZGOakkUNR7qQ09tm', 'Stripe', 'txn_3JMslhSJZGOakkUN02EWCmbj', 'inr', 1626.00, '61125d95b89e4', 'ES18534837', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-10 05:35:59', NULL),
(5, 1, 7, 4, 3, 'RAHUL PALIWAL', 'rahul@gmail.com', '8958764244', 110084, 'test', 'card_1JMsn6SJZGOakkUN7e4h3Y90', 'Stripe', 'txn_3JMsn8SJZGOakkUN0iv9fbO3', 'inr', 1626.00, '61125def54be7', 'ES19105367', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-10 05:37:29', NULL),
(6, 1, 7, 4, 3, 'RAHUL PALIWAL', 'rahul@gmail.com', '8958764244', 110084, 'test', 'card_1JMsoUSJZGOakkUNsgsG6Dkf', 'Stripe', 'txn_3JMsoVSJZGOakkUN1WdmnADQ', 'inr', 1626.00, '61125e4472f8b', 'ES10650325', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-10 05:38:54', NULL),
(7, 1, 7, 5, 4, 'RAHUL PALIWAL', 'rahul@gmail.com', '8958764244', 110084, 'test', 'card_1JMsr8SJZGOakkUNbDjXIzv2', 'Stripe', 'txn_3JMsrASJZGOakkUN0hf9oN2E', 'inr', 1850.00, '61125ee8c59ee', 'ES34247498', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Confirm', '2021-08-10 05:41:38', '2021-08-19 03:57:34'),
(8, 1, 7, 5, 4, 'RAHUL PALIWAL', 'rahul@gmail.com', '8958764244', 110084, 'test', 'card_1JMstPSJZGOakkUNv1raw1Tb', 'Stripe', 'txn_3JMstRSJZGOakkUN1Nsim6sG', 'inr', 7398.00, '61125f75e6d14', 'ES91816303', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Confirm', '2021-08-10 05:43:59', '2021-08-19 03:57:24'),
(9, 1, 7, 5, 4, 'RAHUL PALIWAL', 'rahul@gmail.com', '8958764244', 110084, 'test', 'card_1JMt1ZSJZGOakkUNwp0jUnBk', 'Stripe', 'txn_3JMt1bSJZGOakkUN167HxvyW', 'inr', 90.00, '6112617020bb3', 'ES40908024', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '18 August 2021', 'wrong product', '1', 'Delivered', '2021-08-10 05:52:25', '2021-08-18 04:08:46'),
(10, 1, 7, 4, 3, 'Pooja Sahi', 'poojasahi72@gmail.com', '8941932531', 263601, 'Hi', 'card_1JMt3oSJZGOakkUN1pNA6UwQ', 'Stripe', 'txn_3JMt3qSJZGOakkUN0kk6xVYM', 'inr', 1443.00, '611261fb23ba2', 'ES84313941', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Delivered', '2021-08-10 05:54:44', '2021-08-19 03:58:54'),
(11, 1, 7, 4, 3, 'Mohit Paliwal', 'mohitpaliwal750@gmail.com', '9917224062', 263653, 'hi', 'card_1JMt65SJZGOakkUNNHaSFGGh', 'Stripe', 'txn_3JMt67SJZGOakkUN11yrbmxz', 'inr', 1665.00, '6112628788ea4', 'ES17544538', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Delivered', '2021-08-10 05:57:05', '2021-08-19 03:55:22'),
(12, 1, 7, 5, 4, 'RAHUL PALIWAL', 'rahulpaliwal177@gmail.com', '8958764244', 110084, 'hi', 'card_1JMt8QSJZGOakkUNYrJ1jbPQ', 'Stripe', 'txn_3JMt8SSJZGOakkUN1ULbbY3j', 'inr', 1850.00, '61126318c73c3', 'ES58467021', '10 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '18 August 2021', 'Broken Product', '2', 'Delivered', '2021-08-10 05:59:30', '2021-08-18 04:37:39'),
(13, 1, 7, 5, 4, 'RAHUL PALIWAL', 'user@gmail.com', '8958764244', 110084, 'hi', 'Cash On Delivery', 'Cash On Delivery', NULL, 'INR', 90.00, NULL, 'ES84447491', '11 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-11 04:45:00', NULL),
(14, 1, 7, 5, 4, 'RAHUL PALIWAL', 'user@gmail.com', '8958764244', 110084, 'test', 'Cash On Delivery', 'Cash On Delivery', NULL, 'INR', 45.00, NULL, 'ES57697241', '12 August 2021', 'August', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-08-12 03:30:07', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 'Red', 'Small', '2', 1850.00, '2021-08-10 04:58:39', NULL),
(2, 2, 13, 'Red', 'Small', '1', 1850.00, '2021-08-10 05:05:39', NULL),
(3, 2, 12, 'red', NULL, '2', 45.00, '2021-08-10 05:05:39', NULL),
(4, 8, 13, 'Red', 'Small', '5', 1850.00, '2021-08-10 05:44:07', NULL),
(5, 8, 9, 'red', 'Small', '1', 234.00, '2021-08-10 05:44:07', NULL),
(6, 9, 12, 'red', NULL, '2', 45.00, '2021-08-10 05:52:31', NULL),
(7, 10, 13, 'Red', 'Small', '1', 1850.00, '2021-08-10 05:54:51', NULL),
(8, 11, 13, 'Red', 'Small', '1', 1850.00, '2021-08-10 05:57:11', NULL),
(9, 12, 13, 'Red', 'Small', '1', 1850.00, '2021-08-10 05:59:35', NULL),
(10, 13, 12, 'Red', NULL, '2', 45.00, '2021-08-11 04:45:09', NULL),
(11, 14, 12, 'red', NULL, '1', 45.00, '2021-08-12 03:30:27', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('odouglasrocha@gmail.com', '$2y$10$yWDv2YdMF506XDnWpqJOFuFACnpPqtHLMro.5zjXiAmNq6M6q1d3C', '2022-02-27 16:18:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_hi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_hi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_hi`, `product_slug_en`, `product_slug_hi`, `product_code`, `product_qty`, `product_tags_en`, `product_tags_hi`, `product_size_en`, `product_size_hi`, `product_color_en`, `product_color_hi`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_hi`, `long_descp_en`, `long_descp_hi`, `product_thumbnil`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 11, 15, 'sad', 'sad', 'sad', 'sad', 'OP-123', '200', 'Designer Case', 'Designer Case', 'Small,Medium,Large', 'Small,Medium,Large', 'red,black,Amet', 'Small,Medium,Large', '200', '30', '{asdsadas}', '{afasdasdasd}', '<p>{</p>\r\n\r\n<p>Long Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description English</p>\r\n\r\n<p>}</p>', '<p>{</p>\r\n\r\n<p>Long Description HindiLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description English</p>\r\n\r\n<p>}</p>', 'upload/products/thumbnil/1704058891868420.jpeg', 1, NULL, NULL, NULL, 1, '2021-07-24 01:38:42', '2021-07-24 01:38:42'),
(6, 7, 1, 11, 16, 'Oppo A2 Screen Guard', 'ओप्पो A2 स्क्रीन रक्षक', 'oppo a2 screen guard', 'ओप्पो A2 स्क्रीन रक्षक', 'OP-1231', '100', 'Designer Case', 'Designer Case', 'Small,Medium,Large', 'Small,Medium,Large', 'red,black,Amet', 'Small,Medium,Large', '1000', NULL, 'sfasdfbasdbjfkbakjsfjka', 'gkjhsdfkjghsdfjhgkjsdfhgjk', '<p>Long Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description English</p>', '<p>Long Description HindiLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description English</p>', 'upload/products/thumbnil/1704059384894733.jpeg', 1, 1, 1, 1, 1, '2021-07-24 01:35:17', '2021-07-24 01:35:17'),
(9, 7, 8, 6, 6, 'sad', 'sad', 'sad', 'sad', 'OP-1231', '200', 'Casual Shirt', 'Casual Shirt', 'Small,Medium,Large', 'Small,Medium,Large', 'red,black,Amet', 'Small,Medium,Large', '1000', '234', 'Short Description EnglishShort Description EnglishShort Description EnglishShort Description English', 'Short Description EnglishShort Description EnglishShort Description English', '<p>Long Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description English</p>', '<p>Long Description HindiShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description English</p>', 'upload/products/thumbnil/1705785060485614.jpeg', 1, 1, 1, 1, 1, '2021-07-24 01:36:23', '2021-07-24 01:36:23'),
(10, 7, 1, 11, 16, 'Oppo A1 Screen Guard', 'ओप्पो A1 स्क्रीन रक्षक', 'oppo a1 screen guard', 'ओप्पो A1 स्क्रीन रक्षक', 'OP-12311', '0', 'Designer Case', 'Designer Case', 'Small,Medium,Large', 'Small,Medium,Large', 'red', 'red', '1000', '150', 'Short Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description English', 'Short Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description English', '<p>Long Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description English</p>', '<p>Long Description HindiLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description EnglishLong Description English</p>', 'upload/products/thumbnil/1706234646264272.jpeg', 1, 1, 1, 1, 1, '2021-07-25 00:21:22', '2021-07-25 00:21:22'),
(11, 2, 8, 8, 7, 'Sports Shoes', 'खेलने वाले जूते', 'sports shoes', 'खेलने वाले जूते', 'SP-1231', '50', 'Sports Shoes', 'Sports Shoes', 'Small,Medium,Large', 'Small,Medium,Large', 'red,black,blue', 'red,black,blue', '1500', '158', 'Short Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description English', 'खेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूतेखेलने वाले जूते', '<p style=\"text-align:justify\">Long Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description EnglishShort Description English</p>', '<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते </pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>\r\n\r\n<pre style=\"text-align:justify\">\r\nखेलने वाले जूते</pre>', 'upload/products/thumbnil/1706235028047212.jpeg', 1, NULL, 1, 1, 1, '2021-07-25 00:25:24', NULL),
(12, 7, 1, 11, 15, 'Oppo S20 Screen Guard', 'ओप्पो S20 स्क्रीन रक्षक', 'oppo s20 screen guard', 'ओप्पो S20 स्क्रीन रक्षक', 'OP-S20-1231', '100', 'Screen Guards', 'Screen Guards', NULL, NULL, 'red,black,blue', 'red,black,blue', '250', '45', '{Oppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen Guards}', '{ओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षक}', '<p>{</p>\r\n\r\n<p>Oppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen GuardsOppo S20 Screen Guards</p>\r\n\r\n<p>}</p>', '<p>{</p>\r\n\r\n<p>ओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षकओप्पो S20 स्क्रीन रक्षक</p>\r\n\r\n<p>}</p>', 'upload/products/thumbnil/1706235307061909.jpeg', 1, 1, 1, 1, 1, '2021-07-26 23:46:25', '2021-07-26 23:46:25'),
(13, 2, 8, 8, 7, 'Mens Sports Shoes', 'Mens Sports Shoes', 'mens sports shoes', 'Mens Sports Shoes', 'MN-211', '138', 'Sports Shoes', 'Sports Shoes', 'Small,Medium,Large', 'Small,Medium,Large', 'Red,Blue', 'Red,Blue', '2400', '1850', 'long long long long long long long long long long long long long long', 'long long long long long long long long long long long long long long', '<p>Long Description English long long long long long long long long long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;lon</p>', '<p>Long Description English long long long long long long long long long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;long&nbsp;lon</p>', 'upload/products/thumbnil/1707047590842702.jpeg', 1, 1, 1, 1, 1, '2021-08-02 23:40:44', '2021-08-19 03:58:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Ecom Shop', 'Ecom Shop', 'Best Online Shoes, Best Products', 'Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation. Lorem ipsum is derived from the Latin dolorem ipsum roughly translated as pain itself.', 'text', NULL, '2021-08-18 03:14:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JKoFGsmLJdSJR9eS2sz3dh2pn3DfYPvg8rld0FYP', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTo2OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM3OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJJeTJGVGlXOGZDR2lodk9BYkMyb0YyUzB0Q21hOEd4UTR1Nm1tZW50IjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHJ5OVpCU2lSVDU2ME11ekFQd2NuWU9IMVFkcG5KU0hsZS51QmI2aWRXaEZXOXExMUFPSUNpIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRyeTlaQlNpUlQ1NjBNdXpBUHdjbllPSDFRZHBuSlNIbGUudUJiNmlkV2hGVzlxMTFBT0lDaSI7fQ==', 1645972349);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(4, 7, 'ALMORA', '2021-08-09 04:37:42', NULL),
(5, 7, 'DELHI', '2021-08-09 04:37:53', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(7, 'INDIA', '2021-08-06 03:23:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(3, 7, 4, 'Uttarakhand', '2021-08-09 04:38:22', NULL),
(4, 7, 5, 'Delhi', '2021-08-09 04:38:40', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1708416388413136.png', '8958764215', '5623124589', 'support@ecomshop.com', 'ECOM-SHOP', 'ThemesGround, 789 Main rd, Anytown, CA 12345 INDIA', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.youtube.com', NULL, '2021-08-18 02:18:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/sliders/1704437965377980.jpg', 'Slider One', 'Please wrtie the description', 1, NULL, NULL),
(3, 'upload/sliders/1704439635412592.jpg', 'Why choose us?', 'Please wrtie the description', 1, NULL, '2021-07-07 01:29:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_hi`, `subcategory_slug_en`, `subcategory_slug_hi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Smartphone', 'स्मार्टफोन', 'smartphone', 'स्मार्टफोन', NULL, '2021-06-25 23:38:31'),
(5, 1, 'Laptop', 'लैपटॉप', 'laptop', 'लैपटॉप', NULL, NULL),
(6, 8, 'Mans Top Ware', 'मैन्स टॉप वेयर', 'mans-top-ware', 'मैन्स-टॉप-वेयर', NULL, NULL),
(7, 8, 'Mans Bottom Ware', 'मैन्स बॉटम वेयर', 'mans-bottom-ware', 'मैन्स-बॉटम-वेयर', NULL, NULL),
(8, 8, 'Mans Footwear', 'पुरुषों के जूते', 'mans-footwear', 'पुरुषों-के-जूते', NULL, NULL),
(9, 8, 'Women Footwear', 'महिलाओं के जूते', 'women-footwear', 'महिलाओं-के-जूते', NULL, NULL),
(10, 1, 'Computer Peripherals', 'कंप्यूटर सहायक उपकरण', 'computer-peripherals', 'कंप्यूटर-सहायक-उपकरण', NULL, NULL),
(11, 1, 'Mobile Accessories', 'मोबाइल से जुड़े सामान', 'mobile-accessories', 'मोबाइल-से-जुड़े-सामान', NULL, NULL),
(12, 9, 'Home Furnishings', 'घर सजाने का सामान', 'home-furnishings', 'घर-सजाने-का-सामान', NULL, NULL),
(13, 9, 'Living Room', 'बैठक कक्ष', 'living-room', 'बैठक-कक्ष', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_hi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name_en`, `subsubcategory_name_hi`, `subsubcategory_slug_en`, `subsubcategory_slug_hi`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Gaming Laptop', 'गेमिंग लैपटॉप', 'gaming-laptop', 'गेमिंग-लैपटॉप', NULL, '2021-06-26 01:18:18'),
(2, 1, 5, 'Macbook', 'मैकबुक', 'macbook', 'मैकबुक', NULL, NULL),
(3, 1, 5, 'Laptop and Notebook', 'लैपटॉप और नोटबुक', 'laptop-and-notebook', 'लैपटॉप-और-नोटबुक', NULL, NULL),
(5, 8, 6, 'Mans TShirt', 'मैंस टीशर्ट', 'mans-tshirt', 'मैंस-टीशर्ट', NULL, NULL),
(6, 8, 6, 'Mans Cashual Shirts', 'मैंस कैजुअल शर्ट्स', 'mans-cashual-shirts', 'मैंस-कैजुअल-शर्ट्स', NULL, NULL),
(7, 8, 8, 'Mans Sports Shoes', 'पुरुषों के खेल के जूते', 'mans-sports-shoes', 'पुरुषों-के-खेल-के-जूते', NULL, NULL),
(8, 8, 8, 'Mens Casual Shoes', 'पुरुषों के आरामदायक जूते', 'mens-casual-shoes', 'पुरुषों-के-आरामदायक-जूते', NULL, NULL),
(9, 8, 8, 'Mens Formal Shoes', 'पुरुषों के औपचारिक जूते', 'mens-formal-shoes', 'पुरुषों-के-औपचारिक-जूते', NULL, NULL),
(10, 8, 9, 'Women Flats Shoes', 'महिलाओं के फ्लैट जूते', 'women-flats-shoes', 'महिलाओं-के-फ्लैट-जूते', NULL, NULL),
(11, 8, 9, 'Women Heels', 'महिला ऊँची एड़ी के जूते', 'women-heels', 'महिला-ऊँची-एड़ी-के-जूते', NULL, NULL),
(12, 8, 9, 'Women Sneakers', 'महिला स्नीकर्स', 'women-sneakers', 'महिला-स्नीकर्स', NULL, NULL),
(13, 1, 10, 'Printers', 'मुद्रक', 'printers', 'मुद्रक', NULL, NULL),
(14, 1, 10, 'Projectors', 'प्रोजेक्टर', 'projectors', 'प्रोजेक्टर', NULL, NULL),
(15, 1, 11, 'Screen Guards', 'स्क्रीन गार्ड', 'screen-guards', 'स्क्रीन-गार्ड', NULL, NULL),
(16, 1, 11, 'Designer Cases', 'डिजाइनर मामले', 'designer-cases', 'डिजाइनर-मामले', NULL, NULL),
(17, 9, 12, 'Bed Liners', 'बिस्तर लाइनर', 'bed-liners', 'बिस्तर-लाइनर', NULL, NULL),
(18, 9, 12, 'Bed Sheets', 'चादरे', 'bed-sheets', 'चादरे', NULL, NULL),
(19, 9, 12, 'Blankets', 'कम्बल', 'blankets', 'कम्बल', NULL, NULL),
(20, 9, 13, 'Tv Units', 'टीवी इकाइयाँ', 'tv-units', 'टीवी-इकाइयाँ', NULL, NULL),
(21, 9, 13, 'Dining Sets', 'डाइनिंग सेट', 'dining-sets', 'डाइनिंग-सेट', NULL, NULL),
(22, 9, 13, 'Coffee Tables', 'कॉफ़ी मेज़', 'coffee-tables', 'कॉफ़ी-मेज़', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(7, 'Orlando Douglas Rocha', 'odouglasrocha@gmail.com', '1134102621', NULL, NULL, '$2y$10$mIYH2oBbuLkB/9r3.kqmwOHB.bREwGbranHhIQ4Lv16I3.ivwGIci', NULL, NULL, NULL, NULL, NULL, '2022-02-27 15:06:34', '2022-02-27 15:06:34'),
(8, 'User', 'user@user.com', '11944784343', '2022-02-27 13:58:47', NULL, '$2y$10$ry9ZBSiRT560MuzAPwcnYOH1QdpnJSHle.uBb6idWhFW9q11AOICi', NULL, NULL, NULL, NULL, NULL, '2022-02-27 15:16:01', '2022-02-27 16:58:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 12, '2021-08-02 01:41:33', NULL),
(3, 1, 6, '2021-08-02 03:28:47', NULL),
(4, 1, 11, '2021-08-25 02:19:45', NULL),
(5, 1, 10, '2021-08-25 02:19:49', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Índices para tabela `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_reviews`
--
ALTER TABLE `blog_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_reviews_blog_id_foreign` (`blog_id`);

--
-- Índices para tabela `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Índices para tabela `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices para tabela `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `blog_reviews`
--
ALTER TABLE `blog_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `blog_reviews`
--
ALTER TABLE `blog_reviews`
  ADD CONSTRAINT `blog_reviews_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
