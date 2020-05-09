-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2020 m. Geg 09 d. 19:28
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mano_tvs`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `textas` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `pages`
--

INSERT INTO `pages` (`id`, `title`, `textas`) VALUES
(1, 'Prienų baseino statybos pabaiga planuojama šiais metais', 'Gegužės 5 d. Prienų r. savivaldybės meras Alvydas Vaicekauskas ir administracijos direktorė Jūratė Zailskienė su Sporto centro, rangovų atstovais apžiūrėjo vykdomus Prienų baseino statybos darbus.\r\n\r\nBaseinas jau įgauna aiškius kontūrus, šiuo metu, ruošiantis klijuoti plyteles, tikrinamas nepralaidumas vandeniui, pradedami apdailos darbai.\r\n\r\nPlanuojama, kad baseinas bus pilnai užbaigtas iki šių metų pabaigos.'),
(4, 'Pavasariui įsibėgėjus, vyksta darbai Prienų krašte', 'Nors karantinas sustabdė daug įvairių darbų, sulėtino gyvenimo tempą – pagrindiniai Savivaldybės organizuojami darbai nestoja.\r\n\r\nPrasideda Jiezno atnaujinimo darbai\r\n\r\nJiezno mieste jau pradedamos tvarkyti viešosios erdvės: stadiono ir ežero pakrantės zona, teritorija tarp autobusų stoties ir gimnazijos, Nepriklausomybės aikštė, parkas, nusileidimo takas link ežero.\r\n\r\nLygiagrečiai su viešųjų erdvių sutvarkymo darbais Jiezne planuojami ir gatvių remonto darbai – šiais metais bus asfaltuojamos S. Nėries g., J. Basanavičiaus g., Trakų g. ir Tiesos takas.\r\n\r\nAsfaltuojamos gatvės\r\n\r\nKelių priežiūros darbai pamažu įsibėgėja visoje savivaldybėje. Šiuo metu vyksta gatvių asfaltavimo darbai „Kalnų“ ir „Vandenio“ sodininkų bendrijose – asfaltuojamos Rūtų ir Ropių gatvės, ruošiamas pagrindas asfaltui Kalnų Sodo g. Iš viso bus paklota 1 km asfalto dangos. Tikimasi, kad vasarą bus pradėtas ir Prienų Revuonos g. kapitalinis remontas – šiuo metu vykdomos rangos darbų pirkimo procedūros.\r\n\r\nMeras Alvydas Vaicekauskas džiaugiasi, kad finansavimą gatvių priežiūrai skiria ne tik Kelių direkcija, bet ir Taryba – šiais metais iš biudžeto keliams paskirta 200 000 Eur.\r\n\r\nJei nesutrukdys karantino sukelta ekonominė krizė, šiais metais savivaldybėje planuojama asfaltuoti Prienų Klonio g., Pievų g., Statybininkų g., dalį Mėlynių, Žemaitės ir F. Vaitkaus gatvių, Beržų g. ir Naująją g. Naujosios Ūtos k., Liepų g. Purvininkuose, Kaimynų g. ir šaligatvį prie Maironio g. Išlauže, privažiavimą prie Balbieriškio pagr. mokyklos, Bokšto g. Paprūdžių k., Liepų g. Vyšniūnų k.\r\n\r\nKelių priežiūros ir plėtros programos lėšų paskirstymo komisijos pirmininkės administracijos direktorės Jūratės Zailskienės teigimu, keliai yra viena aktualiausių problemų rajone, todėl jos sprendimui skiriamas ypatingas dėmesys.\r\n\r\nAtnaujinamos perėjos, pėsčiųjų takai, viešosios erdvės\r\n\r\nKiekvieną dieną prie Prienų kultūros ir laisvalaikio centro galima matyti besidarbuojančius statybininkus: remontuojamas fasadas, vėliau bus atnaujinamos prieigos. Rangos darbai taip pat vyksta buvusiame Prienų meno mokyklos pastate, kuris iki metų pabaigos bus pritaikytas bendruomenės ir verslo poreikiams jame įsikurs Bendruomenės ir laisvalaikio centras.\r\n\r\nIki metų pabaigos planuojama sutvarkyti pėsčiųjų taką tarp Kauno ir Stadiono gatvių (vadinamąją Petronio alėją, 110 m), pėsčiųjų taką Stadiono mikrorajone tarp Pramonės ir Stadiono gatvių (560 m).\r\n\r\nPrienuose taip pat vyksta gatvių horizontaliojo ženklinimo darbai, tvarkomos pėsčiųjų perėjos Birštono g., Pušyno g. ir Stadiono g.\r\n\r\nAnkstyvą pavasarį prasidėjo dešiniosios Nemuno pakrantės sutvarkymo darbai, kurie bus užbaigti šiemet, atsiras daugiau vietų pasivaikščioti Nemuno pakrante, pasigrožėti kraštovaizdžiu. Paprienėje taip pat bus remontuojama Panemunės g., įrengtas pėsčiųjų ir dviračių takas iki estrados, sutvarkyta estrada. Darbus planuojama pradėti šiais metais.\r\n\r\nKairiojoje Nemuno pusėje, šiapus Greimų tilto, jau įpusėjo apžvalgos aikštelės įrengimo ir pakrantės sutvarkymo darbai. Metams baigiantis, tikėtina, jau galėsime pasidžiaugti dar viena puikia poilsio vieta ir atsivėrusiu nuostabiu vaizdu į Nemuną.\r\n\r\nIr tai ne visi darbai, kurie vyksta ar planuojami augančiame, besikeičiančiame, gražėjančiame Prienų krašte.'),
(5, 'Bus sutvarkytas dešiniosios Nemuno pakrantės kraštovaizdis', 'Prienų rajono savivaldybės administracija 2018 m. gegužės mėnesį pradėjo įgyvendinti ES fondų lėšomis iš dalies finansuojamą projektą „Dešiniosios Nemuno pakrantės kraštovaizdžio sutvarkymas Prienų miesto teritorijoje“ (projekto kodas 05.5.1-APVA-R-019-21-0011; toliau –Projektas). 2019 m. gegužės 24 d. buvo pasirašyta Projekto sutartis tarp LR aplinkos ministerijos Aplinkos projektų valdymo agentūros ir Prienų rajono savivaldybės administracijos dėl Projekto finansavimo.\r\n\r\nDešinioji Nemuno pakrantė, esanti Prienų miesto teritorijoje, šiuo metu neturi kryptingo sąryšio su aplinkinėmis erdvėmis. Teritorija yra priskirta tvarkymo zonai, kurios bendras kraštovaizdžio pobūdis – urbanistinis kraštovaizdis, naudojimo pobūdis – tausojantis-intensyvus, gamtinis pobūdis – upės slėnio. Projekto tikslas – pagerinti kraštovaizdžio arealo būklę didinant kraštovaizdžio vizualinį estetinį potencialą Prienų rajono savivaldybėje. Įvykdytas projektas leis grąžinti sutrikdytą gamtinę pusiausvyrą, padidins gamtinę bioįvairovę bei išsaugos ekologinį stabilumą. Taip pat leis užtikrinti erdvių ir funkcijų balansą, atliekant gamtinių struktūrų ekologinių funkcijų stiprinimą, išsaugoti gamtinį kraštovaizdį nuo tolimesnio transformavimo. Teritorija, kurioje bus įgyvendintos kraštovaizdžio formavimo priemonės, sieks 3,51 ha.\r\n\r\nĮgyvendinus projektą bus sutvarkyti želdynai: iškirsti nereikalingi medžiai ir krūmai, nušienauta veja, pasodinta daugiamečių augalų (hortenzijų ir sedulų krūmų, kadagių). Taip pat suplanuota suformuoti pėsčiųjų takus su integruotomis keturiomis apžvalgos aikštelėmis (regyklomis). Bendras takų ilgis sieks 630 m. Be to, numatyta įrengti mažosios architektūros elementų. Suolai ir šiukšliadėžės bus įrengti pagal tautodailininko, meninės drožybos meistro Algimanto Sakalausko eskizus. Atlikus projekte numatytus darbus, teritorija bus pritaikyta gamtos ir visuomenės poreikiams, bus pagerinta kraštovaizdžio vertybių ir ekologinė būklė, sudarytos sąlygos visuomenei pažinti kraštovaizdį ir juo naudotis.\r\n\r\nŠiuo metu yra vykdomi kraštovaizdžio tvarkymo darbai. Darbus atlieka rangovas UAB „Hidrosta“ pagal 2020 m. vasario 21 d. statybos rangos sutartį Nr. (9.27E)D1-129. Nuo darbų pradžios atlikta 14,69 proc. rangos sutartyje numatytų darbų: nupjauta 164 vnt. medžių ir krūmų, vykdomi pėsčiųjų takų įrengimo darbai.\r\n\r\nBendra projekto „Dešiniosios Nemuno pakrantės kraštovaizdžio sutvarkymas Prienų miesto teritorijoje“ vertė – 131399,00 Eur. Projektas finansuojamas Sanglaudos fondo, Lietuvos Respublikos valstybės ir Prienų rajono savivaldybės biudžeto lėšomis. Projektas vykdomas pagal 2014–2020 metų Europos Sąjungos fondų investicijų veiksmų programos 5 prioriteto „Aplinkosauga, gamtos išteklių darnus naudojimas ir prisitaikymas prie klimato kaitos“ priemonę 05.5.1-APVA-R-019 „Kraštovaizdžio apsauga“.'),
(6, 'Ivoniškių (Prienų) kapinėse įjungtas centralizuoto vandens tiekimas', 'Prienų r. savivaldybės administracijos prašymu, UAB „Prienų vandenys“ jau pajungė Ivoniškių (Prienų) kapinėse centralizuoto vandens tiekimą, kuris žiemos laiku yra išjungiamas.\r\n\r\nPrimename, kad centralizuotai tiekiamo geriamojo vandens tinklai į kapines buvo atvesti prieš 2,5 metų, įrengtos 4 vandens ėmimo kolonėlės, nutiesta beveik 2 km ilgio vandentiekio trasa.'),
(7, 'Prienų r. savivaldybės priešgaisrinė tarnyba gerina materialinę bazę', 'Artėjančią ugniagesių gelbėtojų profesinę šventę Prienų r. savivaldybės priešgaisrinė tarnyba pasitinka džiugiau  nusiteikusi. Praėjusią savaitę tarnyba gaisrams gesinti įsigijo automobilį su visa įranga. Automobilis įsigytas savivaldybės biudžeto lėšomis ir kainavo 21 500 eurų.\r\n\r\nKaip patikino Priešgaisrinės tarnybos vadovas Jonas Kvietkauskas, įvertinus bendrą situaciją ir poreikį, automobilis paskirtas Veiverių ugniagesių komandai, kuri jau dvejus metus iš eilės daugiausia kartų vyko gesinti gaisrų. Be to, tame krašte nebuvo nė vieno automobilio, su kuriuo būtų galimybė greičiau privažiuoti prie gaisro židinio prastais kaimo keliais, ypač rudens–žiemos metu.\r\n\r\nNaujai įsigytas gaisrinis automobilis yra nuvažiavęs beveik 24000 km, talpina ir veža 2,6 t vandens, vandens siurblys yra dirbęs 365 valandas. Anot ugniagesių vadovo, automobilis nors ir ne naujas, bet pagal techninę charakteristiką ir atsižvelgiant į specialistų nuomonę turėtų tarnauti patikimai.\r\n\r\nJ. Kvietkauskas padėkojo Savivaldybei už palaikymą bei pagalbą atnaujinant Priešgaisrinės tarnybos materialinę bazę: be gaisrinio automobilio, savivaldybės lėšomis Stakliškėse šiais metais naujai uždengtas tarnybos padalinio stogas (pernai gruody buvo suremontuotas  ir Veiverių padalinio stogas) Balbieriškyje patalpų viduje įrengtas tualetas ir dušas, taip pat šiuo metu jau 42 darbuotojai (80 proc.) yra aprūpinti kasdienine budėjimo uniforma (apranga).\r\n\r\nGalima pasidžiaugti, kad Prienų krašto ugniagesių gelbėtojų gretas papildo vis daugiau pilietiškų visuomenės atstovų savanorių ugniagesių – šiuo metu savanorių yra 27, kurie kiekvieną minutę pasiruošę atskubėti į pagalbą.\r\n\r\nArtėjančios šv. Florijono dienos proga Savivaldybės meras A. Vaicekauskas su komanda sveikina visus ugniagesius gelbėtojus, dėkoja už nuoširdų darbą ir linki sveikatos, drąsos ir ryžto atsakingame kasdieniniame darbe.'),
(8, 'Siuntų pervežimas atnaujina tarpmiestinių autobusų darbą', 'Kovo pabaigoje sumažėjus žmonių keliavimui šalyje didžioji dalis tarpmiestinių autobusų vežėjų laikinai sustabdė veiklą. Šie pokyčiai suparalyžiavo siuntų siuntimą autobusais. Vis tik įvertinę didėjantį siuntų srauto augimą karantino metu vežėjai po Šv. Velykų planuoja palaipsniui atnaujinti darbą ir bent pradžioje didžiausio postūmio tikisi ne iš keleivių pervežimo, o iš siuntų siuntimo.\r\n\r\n“Jei tarpmiestiniai autobusai sustojo dėl keleivių stygiaus, tai dabar atnaujinama jų veikla iš dalies, tam kad galėtume vežti siuntas. Siuntos visuomet buvęs kaip šalutinis verslas prie keleivių vežimo, šiuo neįprastu metu tampa pagrindiniu”, – kalbėjo “Siuntos autobusais” vadovė Indrė Ūsaitė – Šlenderienė.\r\n\r\nPasak siuntų atstovės, darbas bus atnaujintas iš karto po Šv. Velykų. Iš pradžių ne pilnai, o tarp didžiųjų šalies miestų.\r\n\r\n“Atnaujinsime darbą palaipsniui. Pradėsime nuo kelių reisų tarp didžiųjų šalies miestų ir stebėsime situaciją bei klientų srautus. Planuojame darbą atnaujinti aštuoniuose terminaluose, kai įprastai jų šalyje veikia 43”, – pasakojo siuntų atstovė.\r\n\r\nSiuntų terminalai atnaujins veiklą Vilniaus, Kauno, Klaipėdos, Šiaulių, Panevėžio, Marijampolės, Alytaus ir Prienų autobusų stotyse.\r\n\r\nAnot vežėjų atstovų pradėję darbą po švenčių jie tikisi su siuntų pagalba išjudinti sustojusį keleivių pervežimo verslą. Planuojama, jog pradžioje siuntos bus vežamos “Kautros” ir “Klaipėdos autobusų parko” tarpmiestiniais autobusais.\r\n\r\n“Planuojame, kad siuntų pervežimą aptarnaus iki dešimties autobusų. Nemeluosiu, atnaujiname darbą dėl siuntų vežimo. Be abejo jei atsiras vienas kitas keleivis, tikrai pavešime, vis tik dabar didžiausios viltys į siuntų pervežimą. Tikimės, kad būsime tas pozityvus pavyzdys ir verslui, ir žmonėms, kad viskas po truputį gali pradėti grįžti į vietas”, – kalbėjo “Kautros” generalinis direktorius Linas Skardžiukas.\r\n\r\nSiuntų atstovė taip pat mini, jog atnaujinę veiklą klientams teiks ir naujas paslaugas. Viena iš jų – siuntų pristatymas fiziniams asmenims.\r\n\r\n„Karantino laikotarpis parodė, kad paslauga turi pati ateiti iki kliento. Iki šiol kurjeriai pristatydavę siuntas tik įmonėms, nuo šiol jas pristatys ir žmonėms į namus Vilniuje, Kaune, Klaipėdoje ir Alytuje. Be abejo laikantis visų saugumo reikalavimų”, – minėjo I. Ūsaitė-Šlenderienė.\r\n\r\nTurite papildomų klausimų? „Siuntos autobusais“ vadovė Indrė Ūsaitė – Šlenderienė, 8 656 77839, info@siuntosautobusais.lt'),
(9, 'Prienuose vyko Sveikatą stiprinančio Kauno regiono 8-oji konferencija', 'Lapkričio 15 d. Prienuose vyko Sveikatą stiprinančio Kauno regiono 7-oji konferencija „Lyderystė sveikatos priežiūros sektoriuje – teorija ir praktika“.\r\n\r\nKonferencijoje didelis dėmesys buvo skiriamas visuomenės sveikatos stiprinimui, sveikos gyvensenos ugdymui, aptartos sveikatos politikos naujovės, pasidalinta lyderystės ir bendradarbiavimo pavyzdžiais.\r\n\r\nPrienų r. savivaldybei konferencijoje atstovavo ir sveikinimo žodį tarė mero pavaduotoja Loreta Jakinevičienė, taip pat dalyvavo administracijos direktoriaus pavaduotojas Algis Marcinkevičius, mero patarėja Agnė Dargužienė, Savivaldybės gydytojas Virginijus Slauta, administracijos skyrių atstovai, rajono sveikatos priežiūros įstaigų, Visuomenės sveikatos biuro vadovai ir darbuotojai.\r\n\r\nKonferencijos dalyvius taip pat sveikino SSKR darbo grupės pirmininkė Milda Labašauskaitė, Birštono savivaldybės merė, Kauno regiono plėtros tarybos pirmininkė Nijolė Dirginčienė, prof. habil. dr., SSKR atstovas-konsultantas PSO Juozas Pundzius.\r\n\r\nPirmam konferencijos posėdžiui pirmininkavo mero pavaduotoja L. Jakinevičienė ir Kaišiadorių rajono savivaldybės mero pavaduotojas, Kauno regiono plėtros tarybos narys Darius Vilimas. Konferencijos dalyviai išklausė nemažai pranešimų. Sveikatos apsaugos ministerijos Visuomenės sveikatos departamento Sveikatos stiprinimo skyriaus vedėja Loreta Ašoklienė analizavo savivaldybių sveikatos stiprinimo institutų funkcijų padalijimo ir tarpusavio sąveiką, Kauno rajono savivaldybės meras, Kauno regiono plėtros tarybos narys Valerijus Makūnas pranešime akcentavo, kad rūpintis žmonių sveikata gali kiekvienas, kai suderinami gyventojų poreikiai, politikų tikslai ir asmeninis užsidegimas, Lietuvos sveikatos mokslų universiteto prof. dr. Mindaugas Stankūnas įvardijo, jog tarnaujančios lyderystės pagrindas yra tarpinstitucinė sąveika, bendruomeninis aktyvumas ir sveikas mikroklimatas.\r\n\r\nAntram posėdžiui ,„Lyderystė ir turininga partnerystė“ pirmininkavo prof. habil. dr J. Pundzius ir SSKR darbo grupės pirmininkė M. Labašauskaitė. Šiame posėdyje taip pat buvo išklausyti aktualūs pranešimai. LSMUL KK gyd. neurochirurgas, LSMU Neuromokslų instituto vyresnysis mokslo darbuotojas, Molekulinės neuroonkologijos laboratorijos vadovas, sertifikuotas saviugdos specialistas, doc. dr. Kęstutis Skauminas kalbėjo apie mediko asmeninės lyderystės aktualizavimą, kuriant į asmenį orientuotą sveikatos priežiūros sistemą. Socialinių pokyčių inkubatoriaus VšĮ „Domus solis“ įkūrėja, sisteminių pokyčių konsultantė, socialinių inovacijų diegėja Irena Blaževičė kalbėjo apie partnerystės ir inovacijų vietą visuomenės sveikatos vadyboje, pristatė gerosios praktikos pavyzdžius.\r\n\r\nPo posėdžio vyko vieša ekspertų diskusija ,„Sveikatos sektorius pasigenda asmenybių ir institucijų lyderių. Kokių lyderio savybių ir elgsenos tikisi dirbantieji visuomenės sveikatos labui“.\r\n\r\nVisiems konferencijos pranešėjams buvo įteiktos Prienų r. savivaldybės atminimo dovanos.'),
(10, 'Nemokamos kūno stiprinimo treniruotės lauke su KKSC treniruoklių salės treneriais', 'Kviečiama į nemokamas kūno stiprinimo treniruotes su Prienų kūno kultūros ir sporto centro treniruoklių salės treneriais. Treniruotės vyks sporto stadione (prie Sporto arenos).\r\n\r\nBūtina išankstinė registracija. Prienų r. savivaldybės kūno kultūros ir sporto centro kontaktai.');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `status`) VALUES
(1, 'Donatas', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'Jonas', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(3, 'Petras', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(4, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
