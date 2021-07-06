

-- --------------------------------------------------------

--
-- Table structure for table `abstract`
--

CREATE TABLE `abstract` (
  `aId` int(10) NOT NULL,
  `title` text NOT NULL,
  `authers` text NOT NULL,
  `doi` text NOT NULL,
  `cite` text NOT NULL,
  `pdf` text NOT NULL,
  `abstract` text NOT NULL,
  `menucategory` text NOT NULL,
  `status` int(10) NOT NULL,
  `date` date NOT NULL,
  `isPopular` text NOT NULL
)  ;

--
-- Dumping data for table `abstract`
--

INSERT INTO `abstract` (`aId`, `title`, `authers`, `doi`, `cite`, `pdf`, `abstract`, `menucategory`, `status`, `date`, `isPopular`) VALUES
(1, 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu.', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.', '10.5958/0974-360X.2021.00001.9', 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu. A Comparative Study On The Effect Of Warfarin V/S Acenocoumarol In Patients With Atrial Fibrillation. Research J. Pharm. And Tech. 2021; 14(1):1-5. Doi: 10.5958/0974-360X.2021.00001.9', 'Byju, Praveen G Pai, Remya Reghu. A ', 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu. A Comparative Study On The Effect Of Warfarin V/S Acenocoumarol In Patients With Atrial Fibrillation. Research J. Pharm. And Tech. 2021; 14(1):1-5. Doi: 10.5958/0974-360X.2021.00001.9', '1', 1, '2021-02-24', '0');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL
) ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`userName`, `password`, `emailId`, `image`, `status`) VALUES
('admin', '111', 'jbkitchenfood@gmail.com', 'assets/uploads/profile/963371_avatar-1577909_960_720.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bId` int(11) NOT NULL,
  `tComments` int(11) NOT NULL,
  `tView` int(11) NOT NULL,
  `title` text NOT NULL,
  `imagePath` text NOT NULL,
  `sDescription` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `isPopular` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bId`, `tComments`, `tView`, `title`, `imagePath`, `sDescription`, `description`, `date`, `isPopular`, `status`) VALUES
(1, 0, 0, ' Lates blog post with image', 'assets/uploads/blogImages/573730_about-1.jpg', '<p>Lorem ipsum dolor sit amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.</p>\r\n', '<p>Lorem ipsum dolor sit amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Iisque quaeque propriae has no. Modo blandit tincidunt ne eos, diam periculis disputationi usu cu. Ea eos suscipit expetendis. Vix ea quot modus, id novum vocibus pro. Nec autem ullum albucius no, vel ne tritani omnesque omittantur. Pro fierent hendrerit assueverit et, per quod luptatum comprehensam in.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>No consulatu comprehensam nam. Ferri dolore sententiae te eum, nibh dictas definitiones mea ei. Nec cu augue dicunt, est id verear labitur necessitatibus. Salutandi quaerendum ex nec.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cu quo audire apeirian. Dolore necessitatibus sea id, nihil mandamus an ius, per recusabo interesset reprehendunt ea. In vix autem vituperatoribus, mei sint ipsum dolorem ex, quodsi vitupera</p>\r\n', '2017-08-28', 0, 1),
(2, 0, 0, 'Lates blog post with image', 'assets/uploads/blogImages/193084_featured-4.jpg', '<p>Lorem&nbsp; &quot;ipsum&quot; dolor &#39;sit&#39; amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu</p>\r\n', '<div class=`content`>\r\n<h3><a href=`http://localhost/ajay/?action=blog-details#`>Lates blog post with image</a></h3>\r\n\r\n<p>Lorem&nbsp; &quot;ipsum&quot; dolor &#39;sit&#39; amet, his ea unum ponderum, detracto ponderum an vim. Equidem evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.</p>\r\n&nbsp;\r\n\r\n<p>Iisque quaeque propriae has no. Modo blandit tincidunt ne eos, diam periculis disputationi usu cu. Ea eos suscipit expetendis. Vix ea quot modus, id novum vocibus pro. Nec autem ullum albucius no, vel ne tritani omnesque omittantur. Pro fierent hendrerit assueverit et, per quod luptatum comprehensam in.</p>\r\n&nbsp;\r\n\r\n<p>No consulatu comprehensam nam. Ferri dolore sententiae te eum, nibh dictas definitiones mea ei. Nec cu augue dicunt, est id verear labitur necessitatibus. Salutandi quaerendum ex nec.</p>\r\n&nbsp;\r\n\r\n<p>Cu quo audire apeirian. Dolore necessitatibus sea id, nihil mandamus an ius, per recusabo interesset reprehendunt ea. In vix autem vituperatoribus, mei sint ipsum dolorem ex, quodsi vitupera</p>\r\n\r\n<div class=`bottom-box clearfix`>&nbsp;</div>\r\n</div>\r\n', '2017-08-28', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactquery`
--

CREATE TABLE `contactquery` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `massege` varchar(25) NOT NULL,
  `status` int(10) NOT NULL,
  `subject` varchar(25) NOT NULL
) ;

--
-- Dumping data for table `contactquery`
--

INSERT INTO `contactquery` (`id`, `name`, `email`, `phone`, `massege`, `status`, `subject`) VALUES
(1, 'Rahul Sharma', 'rahulsh8307@gmail.com', '0887 528 7194', 'sai baba', 1, 'gg'),
(2, 'sai', 'rahulsh8307@gmail.com', '08875287194', 'dsds', 1, 'gg'),
(3, 'Rahul Sharma', 'rahulsh8307@gmail.com', '4490417', 'dddd', 1, 'd'),
(4, '', '', '', '', 1, ''),
(5, 'Rahul Sharma', 'rahulsh8307@gmail.com', '08875287194', 'aduaijsfsjfksfi', 1, 'gg'),
(6, 'Rahul Kailash Sharma', 'rahulsh8307@gmail.com', '09057255083', 'hhjjhjhj', 1, 'd'),
(7, 'Mark Gwilliam', 'rahul.kumar@chakrapartner', '4490417', 'sokfslklfk', 1, 'gg'),
(8, 'Mark Gwilliam', 'rahul.kumar@chakrapartner', '4490417', 'SubmitArticleDone', 1, 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gId` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `gCaption` varchar(50) NOT NULL,
  `gImagePath` text NOT NULL,
  `gStatus` int(11) NOT NULL
) ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gId`, `serviceId`, `gCaption`, `gImagePath`, `gStatus`) VALUES
(6, 0, 'Burger ', 'assets/uploads/galleryImages/651137_g1.jpg', 1),
(7, 0, 'Dal Makhani', 'assets/uploads/galleryImages/730719_g2.jpg', 1),
(8, 0, 'Aloo Parata', 'assets/uploads/galleryImages/420097_g3.jpg', 1),
(9, 0, 'Pizza', 'assets/uploads/galleryImages/685078_g4.jpg', 1),
(10, 0, 'MoMo', 'assets/uploads/galleryImages/493546_g5.jpg', 1),
(12, 0, 'Dhosa', 'assets/uploads/galleryImages/419134_g6.jpg', 1),
(13, 0, 'Samosa', 'assets/uploads/galleryImages/336104_g7.jpg', 1),
(14, 0, 'Vage Roll', 'assets/uploads/galleryImages/724083_g8.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hiw`
--

CREATE TABLE `hiw` (
  `hId` int(11) NOT NULL,
  `hName` varchar(50) NOT NULL,
  `hpost` text NOT NULL,
  `hImage` text NOT NULL,
  `hDesc` text NOT NULL,
  `hStatus` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL
) ;

--
-- Dumping data for table `hiw`
--

INSERT INTO `hiw` (`hId`, `hName`, `hpost`, `hImage`, `hDesc`, `hStatus`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'Rahul Sharma', 'CEO', 'assets/uploads/hiw/630761_team2.jpg', '<p>thsi cwejkfsfsjklsdf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sdfjsdkfsddfskjfsf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>lmkmjnhgfd</p>\r\n', 1, 'https://www.facebook.com/rahulkailashsharma', 'https://www.instagram.com/rahulkailash.sharma', 'http://twitter.com/rahulkilashsh'),
(2, 'Kailash Jat', 'Founder', 'assets/uploads/hiw/590781_team3.jpg', '<p>kslfjskjfskjslkjsfsjkfskljfsdfjkllsfsjkllfsfjksdfkljsdfjklsf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>dkdjvjdskvvsvjdskvdnvmdv,vdvmvvndvkvdvd</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ddddddd</p>\r\n', 1, 'https://www.facebook.com/mission100plus', 'https://www.facebook.com/mission100plus', 'https://www.facebook.com/mission100plus'),
(3, 'Manish Jain', 'Experienced Chef', 'assets/uploads/hiw/181121_team1.jpg', '<p>thhfh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>thsi is rahul kumar sharma vinod sharema meena sharma sonu sharma ratan purbiya sita purbiya apj abul kalam sahab</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>vdfd&nbsp;</p>\r\n', 1, 'https://www.facebook.com/chakrapartners/', 'https://www.facebook.com/chakrapartners/', 'https://www.facebook.com/chakrapartners/'),
(4, 'Ram Chandra Jat', 'Experienced Chef', 'assets/uploads/hiw/421339_team4.jpg', '<p>thai ia joorklmsk&#39;lddmglkdbn,vw&#39;ljgrlkdg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sdljvdkjvergiojvkernghvkngio&#39;ejgerkgejvlkdgerjknergdjbegjobrtkdjkegopjrekgeopbk</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'https://www.facebook.com/chakrapartners/', 'https://www.facebook.com/chakrapartners/', 'https://www.facebook.com/chakrapartners/');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `lId` int(11) NOT NULL,
  `imagePath` text NOT NULL,
  `title` text NOT NULL,
  `status` int(11) NOT NULL
) ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`lId`, `imagePath`, `title`, `status`) VALUES
(1, 'logo/7276logo.png', 'Fitness Freak People', 1),
(2, 'logo/2420favicon.png', 'Favicon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menucategory`
--

CREATE TABLE `menucategory` (
  `mid` int(11) NOT NULL,
  `menucategory` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ;

--
-- Dumping data for table `menucategory`
--

INSERT INTO `menucategory` (`mid`, `menucategory`, `status`) VALUES
(1, 'South Indian', 1),
(2, 'Fast Food', 1),
(3, 'Ice Cream', 1),
(4, 'Rajasthani', 1),
(7, 'Punjabi', 1),
(8, 'Gujarati', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_mId` int(11) NOT NULL,
  `m_ChatId` int(11) NOT NULL,
  `m_memberId` int(11) NOT NULL,
  `m_trainerId` int(11) NOT NULL,
  `m_text` text NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_Type` int(11) NOT NULL COMMENT '1 For Send ,2 For Recieve',
  `m_isRead` int(11) NOT NULL,
  `m_status` int(11) NOT NULL
) ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_mId`, `m_ChatId`, `m_memberId`, `m_trainerId`, `m_text`, `m_date`, `m_Type`, `m_isRead`, `m_status`) VALUES
(1, 1, 1, 2, 'Hello', '2017-03-18 10:11:01', 2, 0, 1),
(2, 1, 1, 2, 'Yes', '2017-03-18 10:11:12', 1, 0, 1),
(3, 1, 1, 2, 'theak h', '2017-03-18 10:11:26', 2, 0, 1),
(4, 1, 1, 2, 'Fir se', '2017-03-18 10:12:35', 2, 0, 1),
(5, 1, 1, 2, 'Bol bhai', '2017-03-18 10:14:43', 2, 0, 1),
(6, 1, 1, 2, 'Kya bolu', '2017-03-18 10:14:55', 1, 0, 1),
(7, 1, 1, 2, 'Hello', '2017-04-03 11:21:42', 2, 0, 1),
(8, 2, 1, 3, 'ss', '2017-04-03 11:23:51', 1, 0, 1),
(9, 1, 1, 2, 'sdfff', '2017-04-03 11:24:18', 2, 0, 1),
(10, 2, 1, 3, 'hello sir', '2017-04-03 11:25:44', 2, 0, 1),
(11, 2, 1, 3, 'hello', '2017-04-03 11:36:21', 2, 0, 1),
(12, 2, 1, 3, 'Fir se', '2017-04-03 12:22:56', 2, 0, 1),
(13, 2, 1, 3, 'Aa gyi', '2017-04-03 12:24:48', 1, 0, 1),
(14, 2, 1, 3, 'theak h', '2017-04-03 12:24:59', 2, 0, 1),
(15, 2, 1, 3, 'check again', '2017-04-03 12:25:23', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `metatag`
--

CREATE TABLE `metatag` (
  `pageId` int(11) NOT NULL,
  `pageName` text NOT NULL,
  `pageTitle` text NOT NULL,
  `metaContent` text NOT NULL,
  `metaKeyword` text NOT NULL,
  `metaDescription` text NOT NULL,
  `mStatus` int(11) NOT NULL
) ;

--
-- Dumping data for table `metatag`
--

INSERT INTO `metatag` (`pageId`, `pageName`, `pageTitle`, `metaContent`, `metaKeyword`, `metaDescription`, `mStatus`) VALUES
(1, 'Home', 'Home', '<p>Home</p>\r\n', '<p>Home</p>\r\n', '<p>Home</p>\r\n', 1),
(2, 'About Us', 'About Us', 'About Us', 'About Us', 'About Us', 1),
(3, 'Blog', 'Blog', 'Blog', 'Blog', 'Blog', 1),
(4, 'Contact-Us', 'Contact-Us', 'Contact-Us', 'Contact-Us', 'Contact-Us', 1),
(5, 'Trainer', 'Trainer', 'Trainer', 'Trainer', 'Trainer', 1),
(6, 'Member', 'Member', 'Member', 'Member', 'Member', 1),
(7, 'Forum', 'Forum', 'Forum', 'Forum', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status` int(10) NOT NULL
) ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`, `status`) VALUES
(3, 'rahulkailashsharma5', '0', 1),
(4, 'Online Shopping Fair', 'rahulsh8307@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sId` int(11) NOT NULL,
  `sName` varchar(50) NOT NULL,
  `sImage` text NOT NULL,
  `desc` text NOT NULL,
  `sStatus` int(11) NOT NULL,
  `menucategoryid` int(11) NOT NULL,
  `Author` text NOT NULL,
  `DOI` text NOT NULL,
  `cite` text NOT NULL
) ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sId`, `sName`, `sImage`, `desc`, `sStatus`, `menucategoryid`, `Author`, `DOI`, `cite`) VALUES
(1, 'Auckland business advisory services and tax accoun', 'assets/uploads/hiw/273978_How SEO works.pdf', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor.', 1, 1, ' Red Team Manpower is one of the most reliable and trustworthy jobs Consultancy Company in Jaipur', 'Rahul Sharma', 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu. A Comparative Study On The Effect Of Warfarin V/S Acenocoumarol In Patients With Atrial Fibrillation. Research J.'),
(2, 'Red Team Manpower', 'assets/uploads/hiw/903309_How SEO works.pdf', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor.', 1, 2, ' dgfhj', 'Rahul Sharma', ''),
(4, 'Auckland business advisory services and tax accoun', 'assets/uploads/hiw/403494_How SEO works.pdf', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor.', 1, 1, ' Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident', 'Rahul Sharma', 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu. A Comparative Study On The Effect Of Warfarin V/S Acenocoumarol In Patients With Atrial Fibrillation. Research J.'),
(7, 'Red Team Manpower is one of the most reliable and ', 'assets/uploads/hiw/764035_How SEO works.pdf', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor.', 1, 1, ' Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Pro', 'Rahul Sharma', 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu. A Comparative Study On The Effect Of Warfarin V/S Acenocoumarol In Patients With Atrial Fibrillation. Research J.'),
(8, 'vinay rahul ', 'assets/uploads/hiw/510320_How SEO works.pdf', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident.\r\n\r\nLorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor.', 1, 1, ' Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Pro.\r\n', 'vr555lgt8', 'Shilpa Mary Alias, Vishnu S Nair, Parvathy Byju, Praveen G Pai, Remya Reghu. A Comparative Study On The Effect Of Warfarin V/S Acenocoumarol In Patients With Atrial Fibrillation. Research J.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sId` int(11) NOT NULL,
  `imagePath` text NOT NULL,
  `status` int(11) NOT NULL
) ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sId`, `imagePath`, `status`) VALUES
(6, 'assets/uploads/sliderImages/566680_s1.jpg', 1),
(7, 'assets/uploads/sliderImages/633697_s2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `submitarticle`
--

CREATE TABLE `submitarticle` (
  `Id` int(11) NOT NULL,
  `fristname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` text NOT NULL,
  `abstract` text NOT NULL,
  `title` text NOT NULL,
  `authors` text NOT NULL,
  `file` text NOT NULL,
  `status` int(10) NOT NULL
) ;

--
-- Dumping data for table `submitarticle`
--

INSERT INTO `submitarticle` (`Id`, `fristname`, `middlename`, `lastname`, `email`, `number`, `abstract`, `title`, `authors`, `file`, `status`) VALUES
(1, '\'rahul\'', '\'kailash\'', '\'sharma\'', '\'abc@gmail.com\'', '8522255', 'dddddd', '\'rrrr\'', '\'rr\'', '\'rre\'', 1),
(2, 'asd', 'kailash', 'Sharma', 'rahul.sharma@chakrapartners.com', '', 'hay this dempp', 'ff', 'abc', '', 1),
(3, 'asd', 'kailash', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'hay ', 'uju', 'abc', 'assets/uploads/submitarticle/193767_How SEO works.pdf', 1),
(4, 'asd', 'kailash', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'addddd', 'Red Team Manpower', 'dgrrgrgrggr', 'assets/uploads/submitarticle/701312_How SEO works.pdf', 1),
(5, 'asd', 'nath', 'Sharma', 'rahulsh8307@gmail.com', '8875287194', 'qwertyuio', 'mnbvc', 'abc', 'assets/uploads/submitarticle/441292_How SEO works.pdf', 1),
(6, 'asd', 'nath', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident', 'Bizadvice | Business Advisory, Accounting & Tax', 'abau', 'assets/uploads/submitarticle/443771_How SEO works.pdf', 1),
(7, 'asd', 'kailash', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'SubmitArticleDone', 'Red Team Manpower is one of the most reliable and trustworthy', 'abc', 'assets/uploads/submitarticle/851487_How SEO works.pdf', 1),
(8, 'asd', 'dd', 'Giwilliam', 'rahul.sharma@chakrapartners.com', '08875287194', 'dddddd', 'Red Team Manpower is one of the most reliable and trustworthy', 'abc', 'assets/uploads/submitarticle/979772_How SEO works.pdf', 1),
(9, 'asd', 'kailash', 'Giwilliam', 'rahul.sharma@chakrapartners.com', '08875287194', 'Red Team Manpower is one of the most reliable and trustworthy jobs Consultancy Company in Jaipur', 'Red Team Manpower is one of the most reliable and trustworthy jobs Consultancy Company in Jaipur', 'abc', 'assets/uploads/submitarticle/994729_How SEO works.pdf', 1),
(10, 'Kittu Sharma', 'shara', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Red Team Manpower is one of the most reliable and trustworthy.', 'Red Team Manpower is one of the most reliable and trustworthy', 'abc', 'adminassetsuploadshiw/22190_How SEO works.pdf', 1),
(11, 'Kittu Sharma', 'shara', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Red Team Manpower is one of the most reliable and trustworthy.', 'Red Team Manpower is one of the most reliable and trustworthy', 'abc', '803624_How SEO works.pdf', 1),
(12, 'Tara Sharma', 'Sharma', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Red Team Manpower is one of the most reliable and trustworthy jobs Consultancy Company in Jaipur', 'Red Team Manpower is one of the most reliable and trustworthy jobs Consultancy Company in Jaipur', 'abc', '161638_How SEO works.pdf', 1),
(15, 'rubina', 'shara', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Auckland business advisory services and tax accountant', 'Auckland business advisory services and tax accountant', 'abc', 'assets/uploads/hiw/975488_How SEO works.pdf', 1),
(16, 'sonali', 'nath', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Bizadvice | Business Advisory, Accounting & Tax', 'Bizadvice | Business Advisory, Accounting & Tax', 'abc', 'assets/uploads/hiw/968430_demo file.pdf', 1),
(17, 'Kalo ', 'kailash', 'Giwilliam', 'rahul.sharma@chakrapartners.com', '08875287194', 'Red Team Manpower is one of the most reliable and trustworthy', 'Red Team Manpower is one of the most reliable and trustworthy', 'm', 'admin/assets/uploads/hiw/54073_demo file.pdf', 1),
(18, 'Puran Sharma', 'Sharma', 'Sharma', 'rahul.sharma@chakrapartners.com', '08875287194', 'Red Team Manpower is one of the most reliable and trustworthy', 'Red Team Manpower is one of the most reliable and trustworthy', 'abc', 'assets/uploads/submitarticle/898322_demo file.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `tId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`tId`, `name`, `message`, `date`, `status`) VALUES
(1, 'Rahul Sharma', 'We\'re proud to share that this Global Handwashing Day, Lifebuoy is launching #HforHandwashing, an ambitious movement that will fundamentally', '2020-10-17 07:51:52', 1),
(2, 'Neha Sharma', 'We stumbled across this classy and quaint hotel/restaurant situated just by one of the many bazaars in Jaipur. We were looking for somewhere for an evening drink after some tense and tiring haggling at the markets.\r\nWe were so happy found this place.', '2020-10-17 13:36:11', 1),
(3, 'Vinita Sharma', 'Charming rooftop restaurant in the middle of the bustling Pink City. It is located in the rooftop so one gets a good view too. The food is tasty and reasonably priced. Very good hospitality and service by the staff.', '2020-10-17 12:42:44', 1),
(4, 'Pooja Sharma', 'We were suggested this restaurant by a local and couldn\'t have been more pleased. After a crazy day in this amazing city it was the perfect way to wind down and enjoy some music and rooftop views with great food. Staff was very attentive and super friendly. They also had a fun little way for you to remember your dinner here with some turbans and took your photo for you. A great way to add some laughs in and end the day.', '2020-10-17 13:36:10', 1),
(5, 'Rohit Mehera', 'What can I say, best Thali I have ever eaten on my 1 week in Jaipur! Ambience is fantastic, rooftop with a view, food is superb and service is excellent! Ashkar our server is very accommodating, explained to us the food we ordered and gave us recommendations on places to go around the area. I cannot wait to come back and dine again here! I extremely recommend! Thank you Hotel Sweet Dream Restaurant!', '2020-10-17 13:36:09', 1),
(6, 'Vinu Jain', 'I and my friends had a great dinner on Dahodat the rooftop of this restaurant. The food was very good and the service was great. Great environment with live music and a view', '2020-10-17 13:36:09', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstract`
--
ALTER TABLE `abstract`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `contactquery`
--
ALTER TABLE `contactquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gId`);

--
-- Indexes for table `hiw`
--
ALTER TABLE `hiw`
  ADD PRIMARY KEY (`hId`);

--
-- Indexes for table `menucategory`
--
ALTER TABLE `menucategory`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `metatag`
--
ALTER TABLE `metatag`
  ADD PRIMARY KEY (`pageId`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `submitarticle`
--
ALTER TABLE `submitarticle`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstract`
--
ALTER TABLE `abstract`
  MODIFY `aId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactquery`
--
ALTER TABLE `contactquery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hiw`
--
ALTER TABLE `hiw`
  MODIFY `hId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menucategory`
--
ALTER TABLE `menucategory`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `metatag`
--
ALTER TABLE `metatag`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submitarticle`
--
ALTER TABLE `submitarticle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
