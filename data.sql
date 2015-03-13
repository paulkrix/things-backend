-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 13, 2015 at 02:04 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cl4`
--

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
`id` int(10) unsigned NOT NULL,
  `thing` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `array` tinyint(4) NOT NULL,
  `options` text NOT NULL,
  `helpText` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `thing`, `name`, `type`, `value`, `array`, `options`, `helpText`) VALUES
(1, 1, 'Slugline', 'SHORT', '"PhD candidate at Institute for Marine and Antarctic Studies, University of Tasmania"', 0, 'null', ''),
(2, 1, 'Background image', 'IMAGE', '"uploads\\/2.1.jpeg"', 0, 'null', ''),
(3, 1, 'Default header image', 'IMAGE', '"uploads\\/3.1.jpeg"', 0, 'null', ''),
(4, 2, 'Page name', 'SHORT', '"About \\/ research"', 0, 'null', ''),
(5, 2, 'Text blocks', 'THING', '[7,8]', 1, '{"prototype":{"id":2}}', ''),
(6, 2, 'Header image', 'IMAGE', 'null', 0, 'null', ''),
(7, 3, 'Page name', 'SHORT', '"Publications \\/ awards"', 0, 'null', ''),
(8, 3, 'Text blocks', 'THING', '[9,10]', 1, '{"prototype":{"id":2}}', ''),
(9, 3, 'Header image', 'IMAGE', 'null', 0, 'null', ''),
(10, 4, 'Page name', 'SHORT', '"Photos"', 0, 'null', ''),
(11, 4, 'Text blocks', 'THING', '[11]', 1, '{"prototype":{"id":2}}', ''),
(12, 4, 'Galleries', 'THING', '[12,14,15,16]', 1, '{"prototype":{"id":6}}', ''),
(13, 4, 'Header image', 'IMAGE', 'null', 0, 'null', ''),
(14, 7, 'Title', 'SHORT', '"About me"', 0, 'null', ''),
(15, 7, 'Text body', 'TEXT', '"<p>I grew up bushwalking, bird watching, fishing on inland dams, snorkelling on the coasts and just collecting insects at home: I have always been captivated with the natural world.<\\/p><p>I majored in zoology and ecology at university and learnt to SCUBA dive in my final year. I love diving because it not only opens up a world of amazing and often unseen organisms but also because of the underwater landscapes and habitats you get to experience. Little did I know at that stage that diving would become an occupation.<\\/p><p>I like being above the water too and enjoy travelling, hiking, eating and listening to music.<\\/p>"', 0, 'null', ''),
(16, 7, 'Optional image', 'IMAGE', '"uploads\\/16.7.jpeg"', 0, 'null', ''),
(17, 8, 'Title', 'SHORT', '"Research"', 0, 'null', ''),
(18, 8, 'Text body', 'TEXT', '"<p>My honours and research assistant work - based at the ANU - focused on coral reef fish ecology and while it was very interesting (and warm!) my passion had always been for the cooler temperate waters of Southern Australia.<\\/p><p>My&nbsp;<a href=\\"http:\\/\\/www.imas.utas.edu.au\\/people\\/profiles\\/postgraduate\\/l\\/cayne-layton\\">PhD research<\\/a>&nbsp;- working with&nbsp;<a href=\\"http:\\/\\/www.imas.utas.edu.au\\/people\\/profiles\\/current-staff\\/j\\/craig-johnson\\">Craig Johnson<\\/a>&nbsp;and&nbsp;<a href=\\"https:\\/\\/www.amc.edu.au\\/research\\/people\\/jeff-wright\\">Jeff Wright<\\/a>&nbsp;at the University of Tasmania&#39;s Institute for Marine and Antarctic Studies - examines how healthy kelp forests support themselves and the next generation of kelp &lsquo;seedlings&rsquo;. Using both field and lab experiments along with modelling, I investigate how the physical environment of kelp forests interacts with their population dynamics. My research is framed within the context of ecosystem engineering, habitat restoration, climate change and ecosystem equilibria.<\\/p><p>My broader research interests include habitat dynamics, community ecology and invertebrate biology. I&rsquo;m also passionate about science communication and education.<\\/p>"', 0, 'null', ''),
(19, 8, 'Optional image', 'IMAGE', '"uploads\\/19.8.jpeg"', 0, 'null', ''),
(20, 9, 'Title', 'SHORT', '"Publications page"', 0, 'null', ''),
(21, 9, 'Text body', 'TEXT', '"<ul><li>Layton C, Fulton CJ (2014) Status-dependant foraging behaviour in coral reef wrasse.&nbsp;<em>Coral Reefs<\\/em>&nbsp;33:345-349, DOI 10.1007\\/s00338-014-1138-1<\\/li><li>Binning SA, Roche DG, Layton C (2013) Ectoparasites increase swimming costs in a coral reef fish.&nbsp;<em>Biology Letters<\\/em>&nbsp;9, DOI 10.1098\\/rsbl2012.0927<\\/li><li>Swimming activities and costs in free-living coral reef wrasses (2011) Honours Thesis, Australian National University,&nbsp;<a href=\\"http:\\/\\/hdl.handle.net\\/1885\\/10564\\">http:\\/\\/hdl.handle.net\\/1885\\/10564<\\/a><\\/li><li><a href=\\"http:\\/\\/orcid.org\\/0000-0002-3390-6437\\">ORCID<\\/a><\\/li><li><a href=\\"https:\\/\\/www.researchgate.net\\/profile\\/Cayne_Layton\\">Research Gate<\\/a><\\/li><\\/ul>"', 0, 'null', ''),
(22, 9, 'Optional image', 'IMAGE', 'null', 0, 'null', ''),
(23, 10, 'Title', 'SHORT', '"Awards \\/ extras"', 0, 'null', ''),
(24, 10, 'Text body', 'TEXT', '"<ul><li>Holsworth Wildlife Research Endowement<\\/li><li>Vice Chancellor&rsquo;s Leadership Award for volunteering and community involvement<\\/li><li><a href=\\"http:\\/\\/youngtassiescientists.com\\/?scientists=jennifer-bannan\\">Young Tassie Scientist Award<\\/a>&nbsp;for science communication and engagement<\\/li><li>Australian Postgraduate Award<\\/li><li>Co-host of&nbsp;<a href=\\"http:\\/\\/edgeradio.org.au\\/program\\/yeah-science\\/playlists\\/\\">Yeah,Science!<\\/a>&nbsp;science communication radio program on EdgeRadio<\\/li><li>ADAS Commercial Scientific Diver<\\/li><\\/ul>"', 0, 'null', ''),
(25, 10, 'Optional image', 'IMAGE', 'null', 0, 'null', ''),
(26, 11, 'Title', 'SHORT', '"Photo license"', 0, 'null', ''),
(27, 11, 'Text body', 'TEXT', '"<p><em>Photos remain property of author and cannot be reproduced without written consent<\\/em><\\/p>"', 0, 'null', ''),
(28, 11, 'Optional image', 'IMAGE', 'null', 0, 'null', ''),
(29, 12, 'Gallery title', 'SHORT', '"Kelp forrests"', 0, 'null', ''),
(30, 12, 'Description', 'TEXT', '""', 0, 'null', ''),
(31, 12, 'Images', 'THING', '[13]', 1, '{"prototype":{"id":5}}', ''),
(32, 13, 'Title', 'SHORT', '"Giant kelp"', 0, 'null', ''),
(33, 13, 'Description', 'TEXT', '"<p>One of the few remaining giant kelp (<em>Macrocystis pyrifera<\\/em>) in Fortescue Bay, Tasmania.<\\/p>"', 0, 'null', ''),
(34, 13, 'Image', 'IMAGE', '"uploads\\/34.13.jpeg"', 0, 'null', ''),
(35, 14, 'Gallery title', 'SHORT', '"Wildlife"', 0, 'null', ''),
(36, 14, 'Description', 'TEXT', '""', 0, 'null', ''),
(37, 14, 'Images', 'THING', '[17]', 1, '{"prototype":{"id":5}}', ''),
(38, 15, 'Gallery title', 'SHORT', '"Landscapes"', 0, 'null', ''),
(39, 15, 'Description', 'TEXT', '""', 0, 'null', ''),
(40, 15, 'Images', 'THING', '[18]', 1, '{"prototype":{"id":5}}', ''),
(41, 16, 'Gallery title', 'SHORT', '"Macro"', 0, 'null', ''),
(42, 16, 'Description', 'TEXT', '""', 0, 'null', ''),
(43, 16, 'Images', 'THING', '[19]', 1, '{"prototype":{"id":5}}', ''),
(44, 17, 'Title', 'SHORT', '"Long-spined sea urchin"', 0, 'null', ''),
(45, 17, 'Description', 'TEXT', '"<p>The long-spined sea urchin<em>&nbsp;<\\/em>(<em>Centrostephanus rodgersii<\\/em>) is an invasive urchin in Tasmania associated with increasing ocean temperatures. This species is causing widespread destruction of kelp forests both in Tasmania and on mainland Australia.<\\/p>"', 0, 'null', ''),
(46, 17, 'Image', 'IMAGE', '"uploads\\/46.17.jpeg"', 0, 'null', ''),
(47, 18, 'Title', 'SHORT', '"Lord Howe Island"', 0, 'null', ''),
(48, 18, 'Description', 'TEXT', '"<p>Photo of Lord Howe Island, looking North from the peak of Mt Gower.<\\/p>"', 0, 'null', ''),
(49, 18, 'Image', 'IMAGE', '"uploads\\/49.18.jpeg"', 0, 'null', ''),
(50, 19, 'Title', 'SHORT', '"Fly''s eyes"', 0, 'null', ''),
(51, 19, 'Description', 'TEXT', '"<p>Fly&#39;s eyes (f. Stratiomyidae)<\\/p>"', 0, 'null', ''),
(52, 19, 'Image', 'IMAGE', '"uploads\\/52.19.jpeg"', 0, 'null', '');

-- --------------------------------------------------------

--
-- Table structure for table `prototypes`
--

CREATE TABLE `prototypes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `fields` text NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prototypes`
--

INSERT INTO `prototypes` (`id`, `name`, `fields`, `options`) VALUES
(1, 'Website settings', '[{"name":"Slugline","type":"SHORT","array":false,"options":null,"id":0,"helpText":""},{"name":"Background image","type":"IMAGE","array":false,"options":null,"id":1,"helpText":""},{"name":"Default header image","type":"IMAGE","array":false,"options":null,"id":2,"helpText":""}]', '{"singleton":true,"exposed":true,"sidebar":true}'),
(2, 'Text block', '[{"name":"Title","type":"SHORT","array":false,"options":null,"id":0,"helpText":""},{"name":"Text body","type":"TEXT","array":false,"options":null,"id":1,"helpText":""},{"name":"Optional image","type":"IMAGE","array":false,"options":null,"id":2,"helpText":""}]', '{"singleton":false,"exposed":false,"sidebar":false}'),
(3, 'Text page', '[{"name":"Page name","type":"SHORT","array":false,"options":null,"id":0,"helpText":""},{"name":"Text blocks","type":"THING","array":true,"options":{"prototype":{"id":2}},"id":1,"helpText":""},{"name":"Header image","type":"IMAGE","array":false,"options":null,"id":2,"helpText":""}]', '{}'),
(4, 'Photo page', '[{"name":"Page name","type":"SHORT","array":false,"options":null,"id":0,"helpText":""},{"name":"Text blocks","type":"THING","array":true,"options":{"prototype":{"id":2}},"id":1,"helpText":""},{"name":"Galleries","type":"THING","array":true,"options":{"prototype":{"id":6}},"id":2,"helpText":""},{"name":"Header image","type":"IMAGE","array":false,"options":null,"id":3,"helpText":""}]', '{}'),
(5, 'Image with description', '[{"name":"Title","type":"SHORT","array":false,"options":null,"id":0,"helpText":""},{"name":"Description","type":"TEXT","array":false,"options":null,"id":1,"helpText":""},{"name":"Image","type":"IMAGE","array":false,"options":null,"id":2,"helpText":""}]', '{}'),
(6, 'Gallery', '[{"name":"Gallery title","type":"SHORT","array":false,"options":null,"id":0,"helpText":""},{"name":"Description","type":"TEXT","array":false,"options":null,"id":1,"helpText":""},{"name":"Images","type":"THING","array":true,"options":{"prototype":{"id":5}},"id":2,"helpText":""}]', '{}');

-- --------------------------------------------------------

--
-- Table structure for table `thing`
--

CREATE TABLE `thing` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `options` text NOT NULL,
  `prototype` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thing`
--

INSERT INTO `thing` (`id`, `name`, `options`, `prototype`) VALUES
(1, 'Website settings', '{"singleton":true,"exposed":true,"sidebar":true}', 1),
(2, 'About page', '{"exposed":true}', 3),
(3, 'Publications page', '{"exposed":true}', 3),
(4, 'Photo page', '{"exposed":true}', 4),
(7, 'About me', '{"singleton":false,"exposed":false,"sidebar":false}', 2),
(8, 'Research', '{"singleton":false,"exposed":false,"sidebar":false}', 2),
(9, 'Publications', '{"singleton":false,"exposed":false,"sidebar":false}', 2),
(10, 'Awards / extras', '{"singleton":false,"exposed":false,"sidebar":false}', 2),
(11, 'Photo license', '{"singleton":false,"exposed":false,"sidebar":false}', 2),
(12, 'Kelp forrests', '{}', 6),
(13, 'Giant kelp', '{}', 5),
(14, 'Wildlife', '{}', 6),
(15, 'Landscapes', '{}', 6),
(16, 'Macro', '{}', 6),
(17, 'Long-spined sea urchin', '{}', 5),
(18, 'Lord Howe Island', '{}', 5),
(19, 'Fly''s eyes', '{}', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `field`
--
ALTER TABLE `field`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prototypes`
--
ALTER TABLE `prototypes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thing`
--
ALTER TABLE `thing`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `prototypes`
--
ALTER TABLE `prototypes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `thing`
--
ALTER TABLE `thing`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;