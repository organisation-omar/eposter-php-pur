-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 11:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeposter`
--

-- --------------------------------------------------------

--
-- Table structure for table `eposter`
--

CREATE TABLE `eposter` (
  `id` int(11) NOT NULL,
  `url` varchar(900) NOT NULL,
  `nameposter` varchar(900) DEFAULT NULL,
  `idtheme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eposter`
--

INSERT INTO `eposter` (`id`, `url`, `nameposter`, `idtheme`) VALUES
(508, 'Amylose-3.pdf', 'Amylose rénale au service de néphrologie au CHU Ibn Rochd de  Casablanca : Incidence, profil épidémiologique, clinique et  étiologique', 355),
(509, 'Amyloses rénales Aspects épidémiologiques, cliniques et évolutifs.pdf', 'Amyloses rénales : Aspects épidémiologiques, cliniques et évolutifs ', 355),
(510, 'Anomalies échocardiographiques chez l’hémodialysé chronique.pdf', 'Anomalies échocardiographiques chez l’hémodialysé chronique', 355),
(511, 'Bartter Syndrome Version finale PDF.pdf', 'Le syndrome de Bartter chez l’enfant : expérience du CHU hassan II de Fès.', 355),
(512, 'Besoin en formation de dialyse péritonéale au Maroc.pdf', 'Besoin en formation de dialyse péritonéale au Maroc : Enquête nationale ', 355),
(513, 'CA SMN 2023.pdf', 'Profil et prévalence des patients diabétiques en hémodialyse chronique :  Etude multicentrique', 355),
(514, 'CA SMN ACTIVITE PHYSIQUE EN HDC.pdf', 'Activité physique chez les hémodialysés chroniques.', 355),
(515, 'AGRANULOCYTOSE SUR CVC.pdf', 'Agranulocytose fébrile sur CVC d’hémodialyse infecté :  à propos d’un cas', 355),
(516, 'covid farabi poster.pdf', 'COVID 19 EN HÉMODIALYSE CHRONIQUE  EXPÉRIENCE DE LA RÉGION DE L’ORIENTAL', 355),
(517, 'Devenir des candidats inscrits sur la liste EME - Dr. Benraiss Kawtar.pdf', 'Devenir des candidats à une greffe rénale à partir  d’un donneur en état de mort encéphalique', 355),
(518, 'DIALYSE EN SITUATION URGENTE - Copie.pdf', 'Dialyse en situation d’urgence : Indications et  complications', 355),
(519, 'Douleur pdf.pdf', 'La douleur chez l’hémodialysé chronique : expérience du  CHU Mohamed 6 de Marrakech', 355),
(520, 'E POSTER SMN.pdf', 'Comparaison du tacrolimus et ciclosporine après la transplantation  rénale : étude monocentrique', 355),
(521, 'EP dans le syndrome de Stiffman (SQALLI).pdf', 'EFFICACITÉ DES ÉCHANGES PLASMATIQUES DANS LE SYNDROME DE STIFF-MAN', 355),
(522, 'EP indications et complications.pdf', 'ECHANGES PLASMATIQUES, INDICATIONS ET COMPLICATIONS.', 355),
(523, 'CA SMN OBSERVANCE THERAPEUTIQUE EN HD CHRONIQUE.pdf', 'Évaluation de l’observance thérapeutique chez les  hémodialysés chroniques.', 355),
(524, 'CA-Etude relation entre somnolence diurne et KTV.pdf', 'Troubles du sommeil chez les patients dialysés : Etude de la relation  entre somnolence diurne et KT/V', 355),
(525, 'CA-le profil histologique de la néphropathie lupique A propos de 70 cas.pdf', 'LE PROFIL HISTOLOGIQUE DE LA NEPHROPATHIE LUPIQUE : A  PROPOS DE 70 CAS', 355),
(526, 'CENTRAL VENOUS OCCLUSION in chronic hemodialysis patients what soulution POSTER.pdf', 'CENTRAL VENOUS OCCLUSION in  chronic hemodialysis patients : what soulution ?', 355),
(527, 'Com Orales SMN 2023.pdf', '19ème Congrès National de Néphrologie (02-04 Mars 2023)   Liste des communications orales', 355),
(528, 'Communication affichée SMN 2023.pdf', 'Glomérulonéphrite à dépôts de C 3', 355),
(529, 'Communication affichée.pdf', 'L’insuffisance rénale sévère chez l’enfant : quel profil a l’admission et quelle évolution ?', 355),
(530, 'Interaction tacrolimus et rotavirus en transplantation rénale.pdf', 'Interaction tacrolimus et rotavirus en transplantation rénale : à propos d’un cas', 355),
(531, 'INTERET DE LA CAPILLAROSCOPIE PERI-UNGUEALE CHEZ LES HEMODIALYSES CHRONIQUES.pdf', 'INTERET DE LA CAPILLAROSCOPIE PERI-UNGUEALE CHEZ LES HEMODIALYSES  CHRONIQUES', 355),
(532, 'irrp et diabete SMN 2023.pdf', 'irrp et diabete SMN 2023 Que peut nous révéler une Insuffisance rénale rapidement progressive chez des  patients diabétiques ? à propos de 17 cas', 355),
(533, 'Kenza benkirane-2.pdf', 'rituximab in the management of adultsd\' glomerular diseases', 355),
(534, 'L’ARMOISE BLANCHE ( CHIH شيح ) occasionnant une toxicité rénale et neurlogique POSTER.pdf', 'L’ARMOISE BLANCHE ( CHIH شيح ) occasionnant une toxicité rénale et neurlogique POSTER', 355),
(535, 'L’évaluation de la lipase sérique chez l’hémodialysé chronique asymptomatique.pdf', 'L’évaluation de la lipase sérique chez l’hémodialysé chronique asymptomatique', 355),
(536, 'LA MALADIE DE KYRLE une autre cause de prurit chez l’hémodialysé chronique POSTER.pdf', 'LA MALADIE DE KYRLE une autre cause  de prurit chez l’hémodialysé chronique', 355),
(537, 'LA PARATHYROïDECTOMIE dans le traitement de l’hyperparathyroidie 11aire experience de service de néphrologie et de chirurgie vasculaire CHU MED VI d’OUJDA POSTER.pdf', 'LA PARA Thyroïdectomie dans le traitement de l’hyperparathyroidie 11aire : experience de service de  néphrologie et de chirurgie vasculaire CHU MED VI d’OUJDA', 355),
(538, 'LE REIN FACE AU VENIN POSTER.pdf', 'LE REIN FACE AU VENIN', 355),
(539, 'E-poster Complications mécaniques en dialyse péritonéale (PDF).pdf', 'Complications mécaniques en dialyse  péritonéale', 355),
(540, 'E-Poster Complications mécaniques en dialyse péritonéale.pdf', 'Complications mécaniques en dialyse péritonéale', 355),
(541, 'E-POSTER impact du portage nasal SMN 2023.pdf', 'L’impact du portage nasal du staphylocoque aureus dans les infections liées au  cathéter d’hémodialyse: à propos de 45 cas', 355),
(542, 'E-poster.pdf', 'L’amylose Rénale chez le sujet âgé :  à propos de 15 cas', 355),
(543, 'E-Poster-la-DP-_1_.pdf', 'Dialyse péritonéale : expérience du service de néphrologie du CHU Mohammed VI Oujda.', 355),
(544, 'Épuration des CL sériques par adsorption dans la néphropathie à cylindres myélomateux.pdf', 'Épuration des chaines légères sériques par adsorption dans  la néphropathie à cylindres myélomateux', 355),
(545, 'EVALUATION DE L’OBSERVANCE THERAPEUTIQUE EXPERIENCE MONOCENTRIQUE.pdf', 'EVALUATION DE L’OBSERVANCE THERAPEUTIQUE : EXPERIENCE MONOCENTRIQUE', 355),
(546, 'HVC ET IRC. POSTER VF.pdf', 'GRAZOPRÉVIR ET ELBASVIR CHEZ DES PATIENTS ATTEINTS D’UNE  HÉPATITE C ET D’UNE INSUFFISANCE RÉNALE CHRONIQUE DE STADE 4 À 5  OU HÉMODIALYSÉS CHRONIQUES : RÉSULTATS DÉFINITIFS D’UNE ETUDE PROSPECTIVE', 355),
(547, 'Hypercalcémie maligne en hémodialyse aigue.pdf', 'Hypercalcémie maligne en  hémodialyse aigue', 355),
(548, 'hypophosphatémie post transplantation rénale.pdf', 'Hypophosphatémie post transplantation rénale', 355),
(549, 'PBR indications résultats histologiques et complications.pdf', 'Ponction biopsie rénale: indications, résultats histologiques et complications', 355),
(550, 'PERIMETRE DE MARCHE CHEZ LES HEMODIALYSES CHRONIQUES.pdf', 'PERIMETRE DE MARCHE CHEZ LES HEMODIALYSES CHRONIQUES A PROPOS DE 40 CAS', 355),
(551, 'Polyurie et troubles hydro-électrolytiques chez le transplanté rénal à partir dd\'un donneur vivant apparenté.pdf', 'Polyurie et troubles hydro-électrolytiques chez le transplanté rénal à partir dd\'un donneur vivant apparenté: Expérience du CHU de Bicêtre', 355),
(552, 'Pontage artérioveineux pour hémodialyse.pdf', 'P O N T A GE A RT ÉRI O V E I N E U X P O U R H É M O D I A L Y S E ; Q U A N D E T C O M M E N T ?', 355),
(553, 'PORTON PUMP INHIBITORS induced nephrotoxicity POSTER.pdf', 'PORTON PUMP INHIBITORS induced', 355),
(554, 'poster 3 HCZ.pdf', 'Vascularites a ANCA post infection COVID: A propos de deux cas ', 355),
(555, 'poster 19ème Congrès National de Néphrologie.pdf', '19ème Congrès National de Néphrologie', 355),
(556, 'Poster A3.pdf', 'Biopsies rénales scanno-guidées : quelles indications ? quels résultats ?', 355),
(557, 'Poster Coronarographie et angioplastie.pdf', 'Coronarographie et angioplastie chez les patients présentant une insuffisance rénale chronique terminale ', 355),
(558, 'poster diabete et dp portrait v1 pdf.pdf', 'La dialyse péritonéale chez les diabétiques :Expérience du service de  Néphrologie du CHU Hassan II Fès', 355),
(559, 'Poster dialyse péritonéale chez diabétiques VF PDF a envoyer.pdf', 'La dialyse péritonéale chez les diabétiques :Expérience du service de Néphrologie du CHU Hassan II Fès', 355),
(560, 'Les atteintes rénales au cours de la sarcoidose.pdf', 'Les atteintes rénales au cours de la sarcoïdose', 355),
(561, 'LES SUJETS ÂGÉS EN HÉMODIALYSE EXPÉRIENCE Dd\'UN CENTRE EN MAURITANIE.pdf', 'LES SUJETS ÂGÉS EN HÉMODIALYSE EXPÉRIENCE', 355),
(562, 'MARIAM FINAL.pdf', 'LEPROFILÉPIDÉMIOLOGIQUEETCLINIQUEDESPATIENTSPRÉSENTANT UNEHYPOKALIÉMIEAVECCOVID-19CONFIRMÉ Mé. ', 355),
(563, 'Multiple myeloma presenting as acute kidney injury secondary to igA light chain kappa deposits POSTER.pdf', 'MULTIPLE MYELOMA presenting as acute kidney ', 355),
(564, 'Nephrites tubulo-interstitielles- Dr. Chattahi Manal.pdf', 'Les néphrites tubulo-interstitielles : A propos de 23 cas', 355),
(565, 'Néphrocalcinose Version finale PDF.pdf', 'PROFIL ETIOLOGIQUE DE LA NEPHROCALCINOSE CHEZ L’ENFANT : EXPERIENCE DU  CHU HASSAN II DE FES', 355),
(566, 'néphropathie diabétique SMN 2023.pdf', 'Apport de La ponction biopsie rénale chez les patients diabétiques :', 355),
(567, 'Poster hémorragie dig.pdf', 'Prise en charge en urgence des hémorragies digestives chez les patients présentant une  insuffisance rénale chronique terminale', 355),
(568, 'poster HID 2.pdf', 'Hypertension artérielle intra dialytique : Prévalence et Facteurs associés chez les Hémodialysés Chroniques', 355),
(569, 'poster néphropathie à oxalates .pdf', 'La néphropathie aigue à oxalates:+une+cause+d’insuffisance+ rénale+aigue+sous<diagnostiqué', 355),
(570, 'Poster Néphropathie Vx.pdf', 'Profil épidémiologique des néphropathies vasculaires chroniques au CHU Mohammed  VI Oujda', 355),
(584, 'poster HID 2.pdf', 'Hypertension artérielle intra dialytique : Prévalence et Facteurs associés chez les Hémodialysés Chroniques', 355),
(585, 'poster néphropathie à oxalates .pdf', 'La néphropathie aigue à oxalates : une cause d’insuffisance  rénale igue sous diagnostiquée', 355),
(586, 'Poster Néphropathie Vx.pdf', 'Profil épidémiologique des néphropathies vasculaires chroniques au CHU Mohammed  VI Oujda', 355),
(587, 'Poster Officiel SMN 2023.pdf', 'HISTOLOGIE DU REJET DE LA GREFFE RÉNALE', 355),
(588, 'Poster PERITONITE 2023 corrigé.pdf', 'Péritonites en dialyse péritonéale : Expérience de l’Hôpital  Militaire d’Instruction Mohammed V de Rabat', 355),
(589, 'poster Prurit final.pdf', 'Les caractéristiques clinico- biologiques et retentissement  du prurit chez les patients hémodialysés', 355),
(590, 'poster SMN 2023 SCR 5 Etude descriptive et analytique.pdf', 'Syndrome cardio-rénal de type 5 : Etude descriptive et analytique', 355),
(591, 'poster SMN2.pdf', 'Le ratio monocytes cholestérol HDL : un nouveau  marqueur cardiovasculaire chez les patients atteints  de maladie rénale chronique ?', 355),
(592, 'poster SMN3.pdf', 'Photoprotection après la transplantation rénale:  résultats d’une enquête menée au CHU de Marrakech', 355),
(593, 'Poster STB (version finale).pdf', 'La sclérose tubéreuse de Bourneville : A propos de 3 cas', 355),
(594, 'Poster Troubles mineraux et osseux en post Transplantation rénale.pdf', 'Troubles minéraux et osseux en post transplantation rénale ', 355),
(595, 'Poster_Amylose_Zaineb_FINAL (1)_resized.pdf', 'Maladie cœliaque compliquée d’une amylose rénale  (à propos d’un cas) ', 355),
(596, 'Poster dysthroidie.pdf', 'Le syndrome de la maladie euthyroïdienne chez les hémodialysés chroniques', 355),
(597, 'Poster EI.pdf', 'Endocardite infectieuse en hémodialyse chronique : tableau initial et évolutif', 355),
(598, 'POSTER HCZ 1.pdf', 'La vascularite de l’enfant: expérience de l’HCZ a propos d’un cas', 355),
(599, 'POSTER HCZ 2 -.pdf', 'Prélèvement de rein chez le donneur vivant par laparoscopie', 355),
(600, 'Poster hémorragie dig.pdf', 'Prise en charge en urgence des hémorragies digestives chez les patients présentant une  insuffisance rénale chronique terminale', 355),
(601, 'SMN 1.pdf', 'Le rapport neutrophile/lymphocyte est-il utile pour prédire la  survenue de dépression chez les hémodialysés chroniques?', 355),
(602, 'SMN COVID IRA.pdf', 'Covid-19 et insuffisance rénale aigue :  Expérience de l’hôpital Ibn Sina de Rabat', 355),
(603, 'SMN --COVID IRA.pdf', 'Covid-19 et insuffisance rénale aigue :  Expérience de l’hôpital Ibn Sina de Rabat', 355),
(604, 'SMN naima mammate.pdf', 'SMN naima mammate activitées et antimcrobiennes des extraits ', 355),
(605, 'SMN-CA-05-JAOUAHAR.pdf', 'Hémodialyse conventionnelle vs hémodiafiltration : impact sur  ld\'évolution des paramètres minéraux osseux chez les hémodialysés chroniques', 355),
(607, 'SMN--Le devenir des fistules artério-veineuses en hémodialyse.pdf', 'SMN--Le devenir des fistules artério-veineuses en hémodialyse', 355),
(608, 'Spectre étiologique des Néphropathies tubulo-interstitielles révélées par un syndrome néphrotique.pdf', 'Spectre étiologique des Néphropathies tubulo-interstitielles révélées par un  syndrome néphrotique', 355),
(609, 'SURVIVAL PREDICTORS in acute hemodialysis patients in eastern Morocco ( about 724 cases) a descriptive and analytical prospective study POSTER.pdf', 'SURVIVAL PREDICTORS in acute hemodialysis  patients in eastern Morocco ( about 724 cases) : a descriptive  and analytical prospective study', 355),
(610, 'Troubles dd\'hémostase pdf.pdf', 'Les troubles de l’hémostase associés à la maladie rénale Chez les patients en néphrologie ', 355),
(611, 'UN CAS D’AMYLOSE AA SECONDAIRE À L’ARTHRITE GOUTTEUSE FAVORISÉE PAR LA POLYKYSTOSE RENALE AUTOSOMIQUE DOMINANTE.pdf', 'UN CAS D’AMYLOSE AA SECONDAIRE À  L’ARTHRITE GOUTTEUSE FAVORISÉE PAR  LA POLYKYSTOSE RENALE AUTOSOMIQUE  DOMINANTE', 355),
(613, 'Wadi OUHAMMOU - Poster Biopsies itératives + néphropathie lupique.pdf', 'Wadi OUHAMMOU - Poster Biopsies itératives + néphropathie lupique', 355),
(614, 'Posters SMN 2023.pdf', '19ème Congrès National de Néphrologie (02-04 Mars 2023)   Liste des communications affichées', 355),
(615, 'Présentation finale .pdf', 'profil e', 355),
(616, 'Prévalence de ld\'HTA chez le transplanté rénal Apport de la mesure ambulatoire de la pression artérielle.pdf', 'Prévalence de l', 355),
(617, 'profil évolutif de la néphropathie lupique chez ld\'homme.pdf', 'profil évolutif de la néphropathie lupique chez l', 355),
(627, 'Troubles dd\'hémostase pdf.pdf', 'Troubles d', 355),
(629, 'Wadi OUHAMMOU - Poster Anticoagulation en hémodialyse.pdf', 'Wadi OUHAMMOU - Poster Anticoagulation en hémodialyse', 355),
(630, 'Wadi OUHAMMOU - Poster Biopsies itératives + néphropathie lupique.pdf', 'Wadi OUHAMMOU - Poster Biopsies itératives + néphropathie lupique', 355),
(632, 'Présentation finale .pdf', 'profile epidemiologique de ld\'hémodialyse en urgence (Apropos de 272 cas)', 355),
(633, 'Prévalence de ld\'HTA chez le transplanté rénal Apport de la mesure ambulatoire de la pression artérielle.pdf', 'PRÉVALENCE DE L’HTA CHEZ LE TRANSPLANTÉ RÉNAL : APPORT DE LA  MESURE AMBULATOIRE DE LA PRESSION ARTÉRIELLE', 355),
(634, 'profil évolutif de la néphropathie lupique chez ld\'homme.pdf', 'profil évolutif de la néphropathie lupique chez l', 355),
(637, 'poster du RTX .pptx', 'poster du RTX .pptx', 355),
(638, 'poster du RTX111 .pptx', 'poster du RTX111 .pptx', 355),
(639, 'poster IF.pptx', 'poster IF.pptx', 355),
(640, 'Poster IRAO.pptx', 'Poster IRAO.pptx', 355),
(641, 'poster ND.pptx', 'poster ND.pptx', 355),
(642, 'poster profil épidémio.pptx', 'poster profil épidémio.pptx', 355),
(643, 'Poster SLT.pptx', 'Poster SLT.pptx', 355),
(644, 'poster.pptx', 'poster.pptx', 355),
(645, 'pronostic des vascularites à ANCA.pptx', 'pronostic des vascularites à ANCA.pptx', 355),
(646, 'pronostic des vascularites à ANCA11.pptx', 'pronostic des vascularites à ANCA11.pptx', 355),
(647, 'Com Orales SMN 2023.pdf', 'Com Orales SMN 2023', 355),
(648, 'Posters SMN 2023.pdf', '19ème Congrès National de Néphrologie (02-04 Mars 2023)   Liste des communications affichée', 355),
(649, 'poster du RTX .pdf', 'Usage du Rituximab dans les Glomérulopathies :  Expérience du Service de Néphrologie du CHU Mohammed VI Oujda', 355),
(650, 'poster ND.pdf', 'LA BIOPSIE RÉNALE PRÉSENTE-T-ELLE UN INTÉRÊT RÉEL CHEZ LE PATIENT  DIABÉTIQUE ?', 355),
(651, 'poster profil épidémio.pdf', 'PROFIL ÉPIDÉMIOLOGIQUE DES PATIENTS INCIDENTS EN DIALYSE CHRONIQUE AU  COURS DE LA PÉRIODE 2017-2021', 355),
(652, 'Poster SLT.pdf', 'La prise en charge de l’insuffisance rénale aigue au cours du syndrome de lyse tumoral N.Charafi, O.El-Kaoua, S.Lalouly, M.Chetatti, W.Fadili, I.Laouad Service de néphrologie, CHU Mohamed-VI de Marrakech', 355),
(653, 'poster.pdf', 'Rémission complète du syndrome néphrotique secondaire à  ld\'amylose AA après traitement par agents biologiques', 355),
(654, 'pronostic des vascularites à ANCA.pdf', 'Pronostic des vascularites à ANCA : expérience du service de néphrologie du CHU Hassan II de Fès.', 355),
(655, 'pronostic des vascularites à ANCA11.pdf', 'Pronostic des vascularites à ANCA : expérience du service de néphrologie du CHU Hassan II de  Fès.', 355),
(656, 'poster du RTX111 .pdf', 'Usage du Rituximab dans les Glomérulopathies :  Expérience du Service de Néphrologie du CHU Mohammed VI Oujda', 355),
(657, 'poster IF.pdf', 'Apport de l’immunofixation des protéines sériques en néphrologie', 355),
(658, 'Poster IRAO.pdf', 'Le profil épidémiologique et indication d’hémodialyse devant l’insuffisance rénale aigue  obstructive Charafi.N, El-Kaoua.O, Lalouly.S, Chetatti.M, Fadili.W, Laouad.I Service de néphrologie, CHU Mohamed-VI de Marrakech', 355),
(659, 'Devenir-des-HDC-en-post-covid-POSTER-SMN-2023.pdf', 'Devenir-des-HDC-en-post-covid-POSTER-SMN-2023.pdf', 355),
(660, 'Devenir-des-HDC-en-post-covid-POSTER-SMN-2023', 'Devenir-des-HDC-en-post-covid-POSTER-SMN-2023', 355),
(661, 'moncvff.pdf', 'moncvff', 355),
(662, 'moncvff.pdf', 'moncvffd\'pdf', 355);

-- --------------------------------------------------------

--
-- Table structure for table `eventinfo`
--

CREATE TABLE `eventinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventinfo`
--

INSERT INTO `eventinfo` (`id`, `name`) VALUES
(15, ' '),
(16, '  ');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(900) NOT NULL,
  `numtheme` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `numtheme`) VALUES
(355, 'tepo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eposter`
--
ALTER TABLE `eposter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eposter_ibfk_1` (`idtheme`);

--
-- Indexes for table `eventinfo`
--
ALTER TABLE `eventinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eposter`
--
ALTER TABLE `eposter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=663;

--
-- AUTO_INCREMENT for table `eventinfo`
--
ALTER TABLE `eventinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eposter`
--
ALTER TABLE `eposter`
  ADD CONSTRAINT `eposter_ibfk_1` FOREIGN KEY (`idtheme`) REFERENCES `themes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
