SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS categories;
CREATE TABLE categories(
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    nameDK VARCHAR(30) NOT NULL
);
INSERT INTO categories
VALUES (1,'Champagne', 'Bobler'),
VALUES(2,'Rosé','Rosé'),
VALUES(3,'White Wine', 'Hvidvin'),
VALUES(4, 'Red Wine', 'Rødvin'),
Values(5,'Non-alcoholic drinks', 'Læskedrikke'),
Values(6,'Beer', 'Øl'),
Values(7,'Somersby','Somersby');


DROP TABLE IF EXISTS items;
CREATE TABLE items(
	id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category INT(5),
    name VARCHAR(30) NOT NULL,
    price VARCHAR(30) NOT NULL,
	description VARCHAR(255),
    descriptionDK VARCHAR(255),
    FOREIGN KEY items(category) REFERENCES categories(id)
);
INSERT INTO items
VALUES (1,1,'Cava Brut, Ana Ferret','gl. 55/255','','Penedes DO, Spanien  Frisk,tør, festlig'),

VALUES(2,2,'Cinsault, Louis Eschenauer', 'gl. 55/255','', " d'Oc VdP, Frankrig Tør, blød, lys laksefarvet" ),
VALUES(3,2,'Pinot Noir, Dopff Irions','gl. 65/275','','Alsace AOC, Frankrig Tør, karakterfuld, rosafarvet'),

VALUES(4,3,'Sauvignon Blanc, Louis Eschenauer','gl. 55/225','',"d'Oc VdP, Feankrig  Tør,frisk, hint af hyldeblomst"),
VALUES(5,3,'Chardonnay, McPherson','gl. 65/275','', 'Victoria, Australien Karakterfuld, fylding, let fadæg'),
VALUES(6,3,'Riesling, Boen','gl. 75/345','','Alto Adige, Italien Frisk, halvtør, let aromatisk'),

VALUES(7,4, 'Merlot, Louis Eschenauer','gl. 55/225','','dOc Vdp, Frankrig Blød, let tilgængelig, frugtig'),
VALUES(8,4, 'Zinfandel, 770 Miles','gl. 65/275','', 'California, USA Frugtig halvtør, medium kraftig'),
VALUES(9,4, 'Piot Noir, Chartron et Trebuchet', 'Rødvin','gl. 75/345','', 'Bourgogne,AOC, Frankrig  Elegant, karakterfuld, silkeblød'),

Values(10,5,'Coca-Cola ','30 kr.'),
Values(11,5,'Sprite','30 kr.'),
Values(12,5,'Fanta ','30 kr.'),
Values(12,5,'Schweppes','30 kr.'),
Values(13,5,'Ramlösa Original Premium','33cl/20kr. 80cl/45kr.'),

Values(14,6,'Calsberg Pilsner''50 cl/45 kr.','Carlsberg Pilsner er blevet en del af den danske kulturarv. Oplev den harmoniske balance mellem bitterhed og sødmefulde æbler. mens du nyder den lyse, gyldne farve med flot skum og duften af fyrretræ, strå og hasselnød- det er næsten som duften af Danmark- 4,6%'),
Values(15,6,'Tuborg Classic','25cl/28kr. 50cl/45kr.', ' Donmarks forste Classic ol, som blev introduceret ved Tuborgs 120-ars jubilceum i 1993. En mørkere pilsnerøl med en behagelig ristet smag og let sødme. 1 glosset fremstår Tuborg Clossic lys brunlig med et flot elfenbensfarvet skum, og duften er frisk-4,6 %'),
Values(16,6,'Jacobsen Yakima IPA','20cl/35kr 50cl/49kr.' ,'Yakima IPA er til dig der værdsætter en stor aromatisk bitterhed med en forfriskende fylde. Den har en frisk fylde med et godt snerpende bid of humle med en god lang efterbitterhed Duften er eksotisk og let syrlig af tropiske frugter -6,5 %'),
Values(17,6,'Jacobsen Brown Ale','25cl/35kr. 50cl/49 kr.','Jacobsen Brown Ale er brugget med den engelske brown ale-stil som forbillede. Brown Ale har en frugtig karakter. Smagen er kompleks og med spændende ristede noter, og den smukke, dybe brune forve minder om mahogni. Duften minder om Sauvignon Blanc-druen- 6,0%'),
Values(18,6,'Grimbergen Double ', '25cl/35kr. 50cl/49 kr.','Nordic Gylden Bryg er en gyldenfarvet lavalkohol-øl med et let perlende skum og med 0,5 % alkohol Duften er blomstret og citrusagtig frembragt af den anvendte humle. Smagen er frisk og sødmefuld og har en moderat bitterhed med god balance - 0,5 %'),
Values(19,6,'Nordic Gylden Bryg','28 kr.',' Grimbergen Double er en belgisk klosterøl. 	Øllen har en smuk kobbergyldern forve toppet of en flot råhvid skumkrone. Duften er fyldig med rige frugtige noter af velmodne pærer vanilje og anis, fulgt af strejf af mørkt sukker og karamel - 6,5%'),
Values(20,6,'Konenbourg 1664', '35 kr.',' Kronenbourg 1664 er Frankrigs foretrukne pilsner. Smagen er blod, rund og fyldig og byder på en fin balance mellem delikat maltsødme  og afdæmpet humlebitterhed. Øllen dufter blomstrende friskt og fremstår gyldent med et livligt spil af kulsyre under den råhvide krone -5,0%'),
Values(21,6,'Konenbourg 1664 Blanc','35 kr.','  Kronenbourg 1664 Blanc lanceredes i 2006 og er i dag en af Frankiigs mest populære hvedeøl, Brygget i stil med de belgiske hvedeøl, der på fransk kaldes blanc, men hor sin helt egen profil bl.a. med en mere sød og rund fylde - 5,0%'),
Values(22,6,'Erdinger','40 kr.','Erdinger Weissbier er en klassisk bayrisk weissbier er velbalanceret og frisk med rige frugtige noter. Erdinger Dunkel er en mørk ufiltreret hvedeøl fra Bayern. Smag og duft er sød karamel og frugtighed med et strejf af rugbrød'),
Values(23,6,'Grimbergen Blonde','35 kr.','Grimbergen Blonde er en smuk guidenblond øl af belgisk type. Duften er domineret af tydelige frugtige noter af banon, grønne cæbler, syltede pærer og honningmelon. 	Øllet byder på en god rund sødme fulgt af en mild behagelig bitterhed, der giver en elegant balance-6,7%'),
Values(24,6,'Grimbergen Blanche','35 kr.','Blanche er en forfrískende hvedeøl af belgisk type. 	Øllet er hvidgyldent og lettere sløret tokket være et diskret gærsvæv, der i ovrigt også bidrager med en blød mundfylde Duften er udpræget citrus med strejf of koriander, vanilije og oltheabolsjet . 6,0 %'),
Values(25,6,'Brooklyn East India Pale Ale','35 kr.','Brooklyn East India Pale Ale er ravfarvet med fyldigt skum. Duften er rig på noter af hyldeblomst, citrus og fyrnole. Smagen er frisk med en smule indledende maltsodme fulgt af en lang blod efterbitterhed. Ollen er udviklet af den amerikanske brygmester Garrett Oliver og lan 6.9 % IPA'),
Values(26,6,'Brooklyn Brown Ale','35 kr.',' Brooklyn Brown Ale er redbrun med kompakt skum. Duften er indledningsvis of humleblomst og frugtighed, fulgt af chokolade-, kaffe- og karamelnoter. Smagen er fyldig med balanceret sodme og en smule tor eftersmag. Ollet er arktypisk reproesentant for amerikansk brown ale - 5,6%'),

Values(27,7,'Somersby Apple Cider ','40 kr.','I England har man brygget æblecider i umindelige tider. Og den stolte tradition er udgangspunktet for udviklingen of Somersby Apple Cider. Dog har vi tilpasset vores cider til den danske smag. I aromaen oplever du en duft of dejlige solmodne sommeræbler - 4,5 % '),
Values(28,7,'Somersby Orchard Selection-Spark Rose','40 kr.',' roséfarvet æblecider med en stor sprudlende friskhed og rund frugtig sødme. Delikat og indbydende duft med elementer af sommerens blomsterflor og dertil dybe frugtige noter af sode rode bær. Godt bud på en voksen frugtig cider, hvor sødmen ikke overdrives. 4.5 Cider');

DROP TABLE IF EXISTS drink_of_the_month;
CREATE TABLE drink_of_the_month(
    id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    VARCHAR(12) date,
    FOREIGN KEY categories(Beer) REFERENCES Beer(id)

);

DROP TABLE IF EXISTS events;
CREATE TABLE events(
	id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    titleDK VARCHAR(30) NOT NULL,
    date DATE NOT NULL,
    time VARCHAR(5),
    description VARCHAR(255),
    descriptionDK VARCHAR(255),
    image VARCHAR(255)
);



DROP TABLE IF EXISTS photos;
CREATE TABLE photos(
	id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    album INT(5),
    FOREIGN KEY photos(album) REFERENCES albums(id)
);