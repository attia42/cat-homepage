-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2009 at 11:24 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cat_catazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `contrib` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `index` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `comment`, `contrib`, `date`) VALUES
(15, 'anas ahmed saad', 'eng.anas.ahmed@gmail.com', 'bgd gamda moot bs areet elmawadee3 tkon bt3moq aktr b3d keda', '7ta al2an msh a3arf', '0000-00-00'),
(6, 'MHamdy', 'the_knight5000@yahoo.com', 'Salam 3lykom <br><br>Gr8 start &amp; nice content :)<br>what about some interacivity with audience ??<br>Note: Plz Atia don''t tell jokes again :s !!!<br><br>good luck<br>salam<br>', '<br>', '0000-00-00'),
(16, 'emamof', 'emamof@gmail.com', 'فيما اعتقد ان هناك الكثير من المجهود بذل لهذا العدد ولكن يبقى الاستمرار والتطوير .', 'المساعده في العدد القادم امر حتمي و لابد منه \r\n\r\nولكن ما يليه لا اعتقد ذلك \r\n', '0000-00-00'),
(9, 'Eng.asmaa refaat', 'asmaa_refaat84@yahoo.com', '<br>', '<br>', '0000-00-00'),
(10, 'Osama Gamal', 'osama.gma@gmail.com', 'nope :D<br>', 'hatdfa3o kam :p<br>', '0000-00-00'),
(11, 'Ahmed Soliman Farghal', 'ahmed@farghal.com', 'Very smart design that reflects the young spirit of the writers.<br><br>I would really recommend that it become larger and more technical richy, also it should be reviewed by a team to fix all spelling/formatting mistakes.<br>', 'Sure :)<br>', '0000-00-00'),
(12, 'Ahmed Mohammed Madkour', 'ahm.madkour@gmail.com', 'المجله جامده جدا و يارب تطور اكتر كمان', 'طبعا اكيد :D', '0000-00-00'),
(13, 'Muhammad Daif', 'daif_undercontrol@yahoo.com', 'طبعا عندى تعليقات ... ناخدها بالترتيب\r\n1. الغلاف .. المجلة مكتوب عليها Catazine على الغلاف يبقى من المتوقع بالنسبة لى ان اتجاه القراءة من الشمال لليمين لكن الواقع عكس كده ، يؤكد عندى الشعور ده ان اول توبيك مكتوب بالانجليزى برضه ... يبقى ليه اتجاه المجلة من اليمين للشمال ؟؟\r\n2. فى الصفحة الأولى انا ملاحظ .. to be continued  .. ليه ؟\r\nهل المفروض انى كقارىء اعرف تفاصيل كتير عن عن الكات للدرجة دى ؟\r\n3. كلمة الامام فى الأول رائعة ما شاء الله و فكرة فيستا معديّة \r\n4. توبيك Gmail7 حاسس ان اسلوبه جاف لحد كبير ، ما شدنيش\r\n5. أخبار التكنولوجيا كويس جدا و فكرة ال search result عجبتنى جدا\r\n6.التوبيك بتاعى ... واااو :D .. بس انا اللى مزعلنى انه ناقص ، كان المفروض يكمل عليه جزء خاص بسرعات ال DSL و للأسف الجزء ده انا شايفه مهم ، كمان هل فى سبب وجيه لكتابة ال url بحروف capital و small ملخبطة كده ؟\r\n7. كود تحت المجهر ممتاز ولا يعيبه الا التنسيق فى السطر بالأحمر\r\n8. Yalla Ne Generik عندى عليه تعليقين ، هى Generik بال K مقصودة وللا غلطة ؟\r\nالتعليق التانى انى فهمت منه معنى كلمة generic لكن الكود تهت منه\r\n9.chroma key توبيك لذيذ و اسامة عنده مهارات أدبية كويسة\r\n10. اسلاميات موضوع جميل و هزنى من الأعماق\r\n11. واحة المرح .. الحتة ال dictionary فى الأول فاجرة !! ضحكت عليها لحد ما قلت يا بس ، و بصفة عامة الجزء ده لطيف جدا .\r\n12.Why Linux موضوع جميل لواحد جديد على المجال ، انا بيعجبنى اسلوب مدكور فى الكتابة .. بسيط و واضح\r\n13.فكرة عمل ال cd &dvd موضوع قوى و مفيد جدا بس انا لى تعليقين:\r\nأولا : فى غلطة مطبعية بشعة فى الأول خالص و هى حرف الألف الناقص فى هذا\r\nثانيا : اسلوب كتابة الامام محتاج عالم ميكروبيولوجى فى جامعة هارفارد علشان يفهمه من أول مرة ، دى نقطة خلاف بينى و بينه بس ما زال موضوع قوى ، فى مشكلة فى التوبيك ده انه الوحيد اللى ما عليهوش اسم ، انا عارف السبب ، بس ده عامل ثغرة فى تناسق المجلة\r\n14. Fashion tronix مش عاجبنى لغته غير انه موضوع سكوب 8 ... بصراحة ما باحبش الكنترول خالص....\r\n15. لغز المادة السوداء محتاج المرة دى أحد الحائزين على جايزة نوبل فى علوم الفلك علشان يقروه من الأساس ... فى كمية مصطلحات صعبة !!\r\nو بصراحة كلمة (الكلمات المفتاحية ) اصابتنى باحد الامراض  الاستوائية الخطيرة .. عرفت بعدين ان معناها key words + غلطة مطبعية واضحة جدا فى ال H مكان ال أ فى الكلمات المفتاحية\r\n16. مش الرسم ده اسمه flow chart  ؟ يعنى مش Algorithm ... ، كمان واضح ان فى مشكلة فى جودة الصورة\r\n17.الجمل الغريبة اللى تحت فكرة رائعة و عجبتنى جدا ، بس فى مشكلة فى صفحة 6 و 13 .. ما اتكتبش فيهم\r\n', '', '0000-00-00'),
(14, 'Ibrahim Abdel Fattah Mohamed', 'bingorabbit@gmail.com', 'The content is good for the first issue, but not very rich.<br>\r\nThe design is cool but it needs some tweaks.<br>\r\nSome spelling and formatting mistakes needs to be reviewed before printing.<br>\r\nThe output is good, and the printing quality is awesome for its price, but I''m afraid of the large number of copies you printed.<br>\r\nYou need to work on this system (catazine.catreloaded.net), formatting is not working properly, and it''s writing english from right to left which is really confusing.<br>', 'it will be ,my pleasure.', '0000-00-00'),
(17, 'eng_romisaa', 'eng_romisaa@yahoo.com', 'nice work ya shabab\r\n', 'i''ll isa', '0000-00-00'),
(18, 'Ro0oFY', 'friends_4ever000@hotmail.com', 'السلام عليكم \r\nأولاً : ألف مبروك على المجلة \r\nثانياً المجلة عسولة طحن وعجبانى موووووت وخاصة الديزاين بتاعها كمان التوبيكس حلوة أوى \r\nمبروك عليكوا وعلينا CaTaZine', '', '0000-00-00'),
(20, 'AbdAllah SaeeD', 'fci_boody@yahoo.com', 'السلام عليكم\r\n\r\nأنا عضو في الكات اصلا ... بإسم\r\nBooDy\r\n\r\nالمهم ...\r\nالمجلة بجد جامدة جدا جدا\r\n\r\nبس ...\r\n مش عاجبني ان واحد من كل فاونديشن يعمل توبيك من غير ما الفاونديشن تعرف عنه حاجة\r\n\r\nيعني المفروض طالما في توبك هيتحط ... يبقى في مناقشة بين الناس و الفاونديشن كلها تدي رأيها ...\r\nوالله بقى لو محدش رد في الفونديشن ... يبقى التوبيك هيتحط على طول ...\r\nطالما العيب في الـ Activity بتاعتهم\r\n\r\n\r\nيععععني: (تقريبا نفس النقطة اللي فوق)\r\nالبروجكت ده بالذات ماينفعش يبقى Secret Project\r\nعشان المفروض ان دي مجلة طالعة بإسم الكات\r\nيبقى مش معقوول الناس اللي في الكات نفسهم مش عارفين يشوفوا البروجكت ماشي ازاي', '', '0000-00-00'),
(22, '', '', '', '', '0000-00-00'),
(23, 'sara gom3a', 'eng_sara_gomaa@hotmail.com', 'أولا : بالنسبة لترتيب المجلة غير واضح فمثلا المجلة بتتفتح من اليمين والبداية انجليزى ثم الصفحة التالية عربى \r\nفهذا غير محدد فى المجلة هى عربية ام انجليزية وإذا كانت تحتوى على الاثنين فيكون نص المجلة عربى من اتجاه والنصف الآخر انجليز ى من الاتجاه الأخر \r\n\r\nثانيا : أقسام المجلة غير واضحة بمعنى فى أى مجلة بيكون فى الأول فى صفحة فيها الأقسام الموجودة جوة المجلة عبارة عن ايه وكل قسم مميز بلون معين فى العنوان فهى عبارة عن مجموعة مواضيع متتالية فقط \r\n\r\nثالثا : لابد من الأكثار من الصور قليلا لأن فى صفحات كاملة لا تحتوى على صورة واحدة وده بيكون شىء ممل للقارىء \r\n\r\nرابعا : الغلاف يعطى ايحاء بإنها مجلة جرافيكس وليس مجلة IT والتصميم  واللوجو أيضا \r\n\r\nخامسا : المواضيع تعطى ايحاء بإنها منقولة من النت وليست من الأشخاص  نفسها وده بيقلل من أهمية المجلة \r\n\r\nسلدسا : عدم وجود تواصل ما بين القارى وبين المجلة ', '', '0000-00-00'),
(24, 'diaa', 'smile4d@gmail.com', 'this magazine is very good idea and i want to thank the team work and waiting  for other', '', '0000-00-00'),
(25, 'Mido', 'midocanbethebest@yahoo.com', 'Kewl', 'why Not ! :D', '0000-00-00'),
(26, 'ghanayem', 'mr_the_engineer@yahoo.com', '', '', '0000-00-00'),
(27, 'مصطفى محمود الشربيني ', 'mostafa1898@gmail.com', 'نجيب المجلة منين ؟؟', '', '0000-00-00'),
(28, 'dr_dina', 'dina.dandonaa@gmail.com', 'very goooooooooood\r\n\r\n', 'yes , sure >>>>>i want to help', '0000-00-00'),
(29, 'Mostafa Mahmoud', 'romio3302@gmail.com', 'جزاكم الله كل خيرا وبارك الله فيكم ونفع بكم وربنا يوفقكم لنشر العلم', '', '0000-00-00'),
(30, 'Mohammed Safwat', 'mail.msafwat@gmail.com', 'I want to make an online version for the CATaZine.', '', '0000-00-00'),
(31, 'Reem Al-Ashry', 'Reem.AlAshry@gmail.com', 'i suggest adding a space each issue for new\r\nWeb applications,specially web2.0 applications\r\nas the magazine has a new issue each 60 days ,\r\nthe issue can include the interesting web applications\r\nthat appeared during the passed 60 days \r\nthe space can include 3 or 4 web applications with a brief description of the application and it''s address,\r\nit can also attract the reader to open the adresses to try the applications \r\ni can be responsible for the space of web applications if it''s ok with u \r\nthanx.    ', 'yes ', '0000-00-00');
