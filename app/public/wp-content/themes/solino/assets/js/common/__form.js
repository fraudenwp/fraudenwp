
var token = "eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjIyMTU3Mjc1NiwidWlkIjozNzM0MjAzOSwiaWFkIjoiMjAyMy0wMS0xMlQxMDoxMjowOS4wMDBaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6MTM3Mjc0NDEsInJnbiI6InVzZTEifQ.nW4l7-MP4NBTUGGZlyjJzo1peXtrHLKxjHsf3TQUG3Q";

// İl İlçe Data
var data = [
  {
	"il": "Adana",
	"plaka": 1,
	"ilceleri": [
	  "Aladağ",
	  "Ceyhan",
	  "Çukurova",
	  "Feke",
	  "İmamoğlu",
	  "Karaisalı",
	  "Karataş",
	  "Kozan",
	  "Pozantı",
	  "Saimbeyli",
	  "Sarıçam",
	  "Seyhan",
	  "Tufanbeyli",
	  "Yumurtalık",
	  "Yüreğir"
	]
  },
  {
	"il": "Adıyaman",
	"plaka": 2,
	"ilceleri": [
	  "Besni",
	  "Çelikhan",
	  "Gerger",
	  "Gölbaşı",
	  "Kahta",
	  "Merkez",
	  "Samsat",
	  "Sincik",
	  "Tut"
	]
  },
  {
	"il": "Afyonkarahisar",
	"plaka": 3,
	"ilceleri": [
	  "Başmakçı",
	  "Bayat",
	  "Bolvadin",
	  "Çay",
	  "Çobanlar",
	  "Dazkırı",
	  "Dinar",
	  "Emirdağ",
	  "Evciler",
	  "Hocalar",
	  "İhsaniye",
	  "İscehisar",
	  "Kızılören",
	  "Merkez",
	  "Sandıklı",
	  "Sinanpaşa",
	  "Şuhut",
	  "Sultandağı" 
	]
  },
  {
	"il": "Ağrı",
	"plaka": 4,
	"ilceleri": [
	  "Diyadin",
	  "Doğubayazıt",
	  "Eleşkirt",
	  "Hamur",
	  "Merkez",
	  "Patnos",
	  "Taşlıçay",
	  "Tutak"
	]
  },
  {
	"il": "Aksaray",
	"plaka": 68,
	"ilceleri": [
	  "Ağaçören",
	  "Eskil",
	  "Gülağaç",
	  "Güzelyurt",
	  "Merkez",
	  "Ortaköy",
	  "Sarıyahşi"
	]
  },
  {
	"il": "Amasya",
	"plaka": 5,
	"ilceleri": [
	  "Göynücek",
	  "Gümüşhacıköy",
	  "Hamamözü",
	  "Merkez",
	  "Merzifon",
	  "Suluova",
	  "Taşova"
	]
  },
  {
	"il": "Ankara",
	"plaka": 6,
	"ilceleri": [
				  "Akyurt",
	  "Altındağ",
	  "Ayaş",
	  "Bala",
	  "Beypazarı",
	  "Çamlıdere",
	  "Çankaya",
	  "Çubuk",
	  "Elmadağ",
				  "Etimesgut",
				  "Evren",
				  "Gölbaşı",
	  "Güdül",
	  "Haymana",
	  "Kalecik",
				  "Kazan",
				  "Keçiören",
	  "Kızılcahamam",
				  "Mamak",
	  "Nallıhan",
	  "Polatlı",
				  "Pursaklar",
				  "Sincan",
	  "Şereflikoçhisar",
				  "Yenimahalle"
	]
  },
  {
	"il": "Antalya",
	"plaka": 7,
	"ilceleri": [
	  "Akseki",
				  "Aksu",
	  "Alanya",
				  "Demre",
				  "Döşemealtı",
	  "Elmalı",
	  "Finike",
	  "Gazipaşa",
	  "Gündoğmuş",
				  "İbradı",
	  "Kaş",
				  "Kemer",
				  "Kepez",
				  "Konyaaltı",
	  "Korkuteli",
	  "Kumluca",
	  "Manavgat",
				  "Muratpaşa",
	  "Serik"
	]
  },
  {
	"il": "Ardahan",
	"plaka": 75,
	"ilceleri": [
	  "Çıldır",
	  "Damal",
	  "Göle",
	  "Hanak",
	  "Merkez",
	  "Posof"	  
	]
  },
  {
	"il": "Artvin",
	"plaka": 8,
	"ilceleri": [
	  "Ardanuç",
	  "Arhavi",
				  "Borçka",
				  "Hopa",
	  "Merkez",
				  "Murgul", 
	  "Şavşat",
	  "Yusufeli"
	]
  },
  {
	"il": "Aydın",
	"plaka": 9,
	"ilceleri": [
				  "Bozdoğan",
				  "Buharkent",	
	  "Çine",
				  "Didim",
	  "Efeler",
	  "Germencik",
				  "İncirliova",
	  "Karacasu",
				  "Karpuzlu",
	  "Koçarlı",
				  "Köşk",
	  "Kuşadası",
	  "Kuyucak",
				  "Merkez", 
	  "Nazilli",
	  "Söke",
	  "Sultanhisar",  
				  "Yenipazar"
	]
  },
  {
	"il": "Balıkesir",
	"plaka": 10,
	"ilceleri": [
	  "Altıeylül",
	  "Ayvalık", 
	  "Balya",
	  "Bandırma",
	  "Bigadiç",
	  "Burhaniye",
	  "Dursunbey",
	  "Edremit",
	  "Erdek",
				  "Gömeç",
	  "Gönen",
	  "Havran",
	  "İvrindi",
	  "Karesi",
	  "Kepsut",
	  "Manyas",
				  "Marmara",
				  "Merkez",
	  "Savaştepe",
	  "Sındırgı",  
	  "Susurluk"
	]
  },
  {
	"il": "Bartın",
	"plaka": 74,
	"ilceleri": [
	  "Amasra",
	  "Kurucaşile",
	  "Merkez",
	  "Ulus"
	]
  },
  {
	"il": "Batman",
	"plaka": 72,
	"ilceleri": [
	  "Beşiri",
	  "Gercüş",
	  "Hasankeyf",
	  "Kozluk",
	  "Merkez",
	  "Sason"
	]
  },
  {
	"il": "Bayburt",
	"plaka": 69,
	"ilceleri": [
	  "Aydıntepe",
	  "Demirözü",
	  "Merkez"
	  
	]
  },
  {
	"il": "Bilecik",
	"plaka": 11,
	"ilceleri": [  
	  "Bozüyük",
	  "Gölpazarı",
	  "İnhisar",
				  "Merkez",
	  "Osmaneli",
	  "Pazaryeri",
	  "Söğüt",
	  "Yenipazar"
	]
  },
  {
	"il": "Bingöl",
	"plaka": 12,
	"ilceleri": [
	  "Adaklı",
	  "Genç",
	  "Karlıova",
	  "Kiğı",
	  "Merkez",
	  "Solhan",
	  "Yayladere",
	  "Yedisu"
	]
  },
  {
	"il": "Bitlis",
	"plaka": 13,
	"ilceleri": [
	  "Adilcevaz",
	  "Ahlat",
	  "Güroymak",
	  "Hizan",
	  "Merkez",
	  "Mutki",
	  "Tatvan"
	]
  },
  {
	"il": "Bolu",
	"plaka": 14,
	"ilceleri": [
	  "Dörtdivan",
	  "Gerede",
	  "Göynük",
	  "Kıbrıscık",
	  "Mengen",
	  "Merkez",
	  "Mudurnu",
	  "Seben",
	  "Yeniçağa"
	]
  },
  {
	"il": "Burdur",
	"plaka": 15,
	"ilceleri": [
	  "Ağlasun",
	  "Altınyayla",
	  "Bucak",
	  "Çavdır",
	  "Çeltikçi",
	  "Gölhisar",
	  "Karamanlı",
	  "Kemer",
	  "Merkez",
	  "Tefenni",
	  "Yeşilova"
	]
  },
  {
	"il": "Bursa",
	"plaka": 16,
	"ilceleri": [
	  "Büyükorhan",
	  "Gemlik",
	  "Gürsu",
	  "Harmancık",
	  "İnegöl",
	  "İznik",
	  "Karacabey",
	  "Keles",
	  "Kestel",
	  "Mudanya",
	  "Mustafakemalpaşa",
	  "Nilüfer",
	  "Orhaneli",
	  "Orhangazi",
	  "Osmangazi",
	  "Yıldırım",
	  "Yenişehir"
	]
  },
  {
	"il": "Çanakkale",
	"plaka": 17,
	"ilceleri": [
	  "Ayvacık",
	  "Bayramiç",
	  "Biga",
	  "Bozcaada",
	  "Çan",
	  "Eceabat",
	  "Ezine",
	  "Gelibolu",
	  "Gökçeada",
	  "Merkez",
	  "Lapseki",
	  "Yenice"
	]
  },
  {
	"il": "Çankırı",
	"plaka": 18,
	"ilceleri": [
	  "Atkaracalar",
	  "Bayramören",
	  "Çerkeş",
	  "Eldivan",
	  "Ilgaz",
	  "Kızılırmak",
	  "Korgun",
	  "Kurşunlu",
	  "Merkez",
	  "Orta",
	  "Şabanözü",
	  "Yapraklı"
	]
  },
  {
	"il": "Çorum",
	"plaka": 19,
	"ilceleri": [
	  "Alaca",
	  "Bayat",
	  "Boğazkale",
	  "Dodurga",
	  "İskilip",
	  "Kargı",
	  "Laçin",
	  "Mecitözü",
	  "Merkez",
	  "Oğuzlar",
	  "Ortaköy",
	  "Osmancık",
	  "Sungurlu",
	  "Uğurludağ"
	]
  },
  {
	"il": "Denizli",
	"plaka": 20,
	"ilceleri": [
	  "Acıpayam",
	  "Babadağ",
	  "Baklan",
	  "Bekilli",
	  "Buldan",
	  "Beyağaç",
	  "Bozkurt",
	  "Çal",
	  "Çameli",
	  "Çardak",
	  "Çivril",
	  "Güney",
	  "Honaz",
	  "Kale",
	  "Merkez",
	  "Merkezefendi",
	  "Pamukkale",
	  "Sarayköy",
	  "Serinhisar",
	  "Tavas"
	]
  },
  {
	"il": "Diyarbakır",
	"plaka": 21,
	"ilceleri": [
	  "Bağlar",
	  "Bismil",
	  "Çermik",
	  "Çınar",
	  "Çüngüş",
	  "Dicle",
	  "Eğil",
	  "Ergani",
	  "Hani",
	  "Hazro",
	  "Kayapınar",
	  "Kocaköy",
	  "Kulp",
	  "Lice",
	  "Silvan",
	  "Sur",
	  "Yenişehir"
	]
  },
  {
	"il": "Düzce",
	"plaka": 81,
	"ilceleri": [
	  "Akçakoca",
	  "Cumayeri",
	  "Çilimli",
	  "Gölyaka",
	  "Gümüşova",
	  "Kaynaşlı",
	  "Merkez",
	  "Kaynaşlı",
	  "Yığılca"
	]
  },
  {
	"il": "Edirne",
	"plaka": 22,
	"ilceleri": [
		  "Enez",
	  "Havsa",
		  "İpsala",
	  "Keşan",
	  "Lalapaşa",
	  "Meriç",
	  "Merkez",
	  "Süloğlu",
	  "Uzunköprü"
	]
  },
  {
	"il": "Elazığ",
	"plaka": 23,
	"ilceleri": [
	  "Ağın",
	  "Alacakaya",
	  "Arıcak",
	  "Baskil",
	  "Karakoçan",
	  "Keban",
	  "Kovancılar",
	  "Maden",
	  "Merkez",
	  "Palu",
	  "Sivrice"
	]
  },
  {
	"il": "Erzincan",
	"plaka": 24,
	"ilceleri": [
	  "Çayırlı",
	  "İliç",
	  "Kemah",
	  "Kemaliye",
	  "Merkez",
	  "Otlukbeli",
	  "Refahiye",
	  "Tercan",
	  "Üzümlü"
	]
  },
  {
	"il": "Erzurum",
	"plaka": 25,
	"ilceleri": [
	  "Aşkale",
	  "Aziziye",
	  "Çat",
	  "Hınıs",
	  "Horasan",
	  "İspir",
	  "Karaçoban",
	  "Karayazı",
	  "Köprüköy",
	  "Narman",
	  "Oltu",
	  "Olur",
	  "Palandöken",
	  "Pasinler",
	  "Pazaryolu",
	  "Şenkaya",
	  "Tekman",
	  "Tortum",
	  "Uzundere",
	  "Yakutiye"
	]
  },
  {
	"il": "Eskişehir",
	"plaka": 26,
	"ilceleri": [
	  "Alpu",
	  "Beylikova",
	  "Çifteler",
	  "Günyüzü",
	  "Han",
	  "İnönü",
	  "Mahmudiye",
	  "Mihalgazi",
	  "Mihalıççık",
	  "Odunpazarı",
	  "Sarıcakaya",
	  "Seyitgazi",
	  "Sivrihisar",
	  "Tepebaşı"
	]
  },
  {
	"il": "Gaziantep",
	"plaka": 27,
	"ilceleri": [
	  "Araban",
	  "İslahiye",
	  "Karkamış",
	  "Nizip",
	  "Nurdağı",
	  "Oğuzeli",
	  "Şahinbey",
	  "Şehitkamil",
	  "Yavuzeli"
	]
  },
  {
	"il": "Giresun",
	"plaka": 28,
	"ilceleri": [
	  "Alucra",
	  "Bulancak",
	  "Çamoluk",
	  "Çanakçı",
	  "Dereli",
	  "Doğankent",
	  "Espiye",
	  "Eynesil",
	  "Görele",
	  "Güce",
	  "Keşap",
	  "Merkez",
	  "Şebinkarahisar",
	  "Tirebolu",
	  "Piraziz",
	  "Yağlıdere"
	]
  },
  {
	"il": "Gümüşhane",
	"plaka": 29,
	"ilceleri": [
	  "Kelkit",
	  "Köse",
	  "Kürtün",
	  "Merkez",
	  "Şiran",
	  "Torul"
	]
  },
  {
	"il": "Hakkari",
	"plaka": 30,
	"ilceleri": [
	  "Çukurca",
	  "Merkez",
	  "Şemdinli",
	  "Yüksekova"
	]
  },
  {
	"il": "Hatay",
	"plaka": 31,
	"ilceleri": [
	  "Altınözü",
		  "Antakya",
	  "Arsuz",
	  "Belen",
	  "Defne",
	  "Dörtyol",
	  "Erzin",
	  "Hassa",
	  "İskenderun",
	  "Kırıkhan",
	  "Kumlu",
	  "Payas",
	  "Reyhanlı",
	  "Samandağ",
	  "Yayladağı"
	]
  },
  {
	"il": "Iğdır",
	"plaka": 76,
	"ilceleri": [
	  "Aralık",
	  "Karakoyunlu",
	  "Merkez",
	  "Tuzluca"
	]
  },
  {
	"il": "Isparta",
	"plaka": 32,
	"ilceleri": [
	  "Aksu",
	  "Atabey",
	  "Eğirdir",
	  "Gelendost",
	  "Gönen",
	  "Keçiborlu",
	  "Merkez",
	  "Senirkent",
	  "Sütçüler",
	  "Şarkikaraağaç",
	  "Uluborlu",
	  "Yalvaç",
	  "Yenişarbademli"
	]
  },
  {
	"il": "İstanbul",
	"plaka": 34,
	"ilceleri": [
	  "Adalar",
	  "Ataşehir",
	  "Arnavutköy",
	  "Avcılar",
	  "Bağcılar",
	  "Bahçelievler",
	  "Bakırköy",
	  "Başakşehir",
	  "Bayrampaşa",
	  "Beşiktaş",
	  "Beykoz",
	  "Beylikdüzü",
	  "Beyoğlu",
	  "Büyükçekmece",
	  "Çatalca",
	  "Çekmeköy",
	  "Esenler",
	  "Esenyurt",
	  "Eyüp",
	  "Fatih",
	  "Gaziosmanpaşa",
	  "Güngören",
	  "Kadıköy",
	  "Kağıthane",
	  "Kartal",
	  "Küçükçekmece",
	  "Maltepe",
	  "Pendik",
	  "Sancaktepe",
	  "Sarıyer",
	  "Silivri",
	  "Sultanbeyli",
	  "Sultangazi",
	  "Şile",
	  "Şişli",
	  "Tuzla",
	  "Ümraniye",
	  "Üsküdar",
	  "Zeytinburnu"
	]
  },
  {
	"il": "İzmir",
	"plaka": 35,
	"ilceleri": [
	  "Aliağa",
	  "Balçova",
	  "Bayındır",
	  "Bayraklı",
	  "Bergama",
	  "Beydağ",
	  "Bornova",
	  "Buca",
	  "Çeşme",
	  "Çiğli",
	  "Dikili",
	  "Foça",
	  "Gaziemir",
	  "Güzelbahçe",
	  "Karabağlar",
	  "Karaburun",
	  "Karşıyaka",
	  "Kemalpaşa",
	  "Kınık",
	  "Kiraz",
	  "Konak",
	  "Menderes",
	  "Menemen",
	  "Narlıdere",
	  "Ödemiş",
	  "Seferihisar",
	  "Selçuk",
	  "Tire",
	  "Torbalı",
	  "Urla"
	]
  },
  {
	"il": "Kahramanmaraş",
	"plaka": 46,
	"ilceleri": [
	  "Afşin",
	  "Andırın",
	  "Çağlayancerit",
	  "Dulkadiroğlu",
	  "Elbistan",
	  "Ekinözü",
	  "Göksun",
	  "Merkez",
	  "Nurhak",
	  "Onikişubat",
	  "Pazarcık",
	  "Türkoğlu"
	]
  },
  {
	"il": "Karabük",
	"plaka": 78,
	"ilceleri": [
	  "Eflani",
	  "Eskipazar",
	  "Merkez",
	  "Ovacık",
	  "Safranbolu",
	  "Yenice"
	]
  },
  {
	"il": "Karaman",
	"plaka": 70,
	"ilceleri": [
	  "Ayrancı",
	  "Başyayla",
	  "Ermenek",
	  "Kazımkarabekir",
	  "Merkez",
	  "Sarıveliler"	  
	]
  },
  {
	"il": "Kars",
	"plaka": 36,
	"ilceleri": [
	  "Akyaka",
	  "Arpaçay",
	  "Digor",
	  "Kağızman",
	  "Merkez",
	  "Sarıkamış",
	  "Selim",
	  "Susuz"
	]
  },
  {
	"il": "Kastamonu",
	"plaka": 37,
	"ilceleri": [
	  "Abana",
	  "Ağlı",
	  "Araç",
	  "Azdavay",
	  "Bozkurt",
	  "Cide",
	  "Çatalzeytin",
	  "Daday",
	  "Devrekani",
	  "Doğanyurt",
	  "Hanönü",
	  "İhsangazi",
	  "İnebolu",
	  "Küre",
	  "Merkez",
	  "Pınarbaşı",
	  "Seydiler",
	  "Şenpazar",
	  "Taşköprü",
	  "Tosya"
	]
  },
  {
	"il": "Kayseri",
	"plaka": 38,
	"ilceleri": [
	  "Akkışla",
	  "Bünyan",
	  "Develi",
	  "Felahiye",
	  "Hacılar",
	  "İncesu",
	  "Kocasinan",
	  "Melikgazi",
	  "Özvatan",
	  "Pınarbaşı",
	  "Sarıoğlan",
	  "Sarız",
	  "Talas",
	  "Tomarza",
	  "Yahyalı",
	  "Yeşilhisar"
	]
  },
  {
	"il": "Kırıkkale",
	"plaka": 71,
	"ilceleri": [
	  "Bahşili",
	  "Balışeyh",
	  "Çelebi",
	  "Delice",
	  "Karakeçili",
	  "Keskin",
	  "Merkez",
	  "Sulakyurt",
	  "Yahşihan"
	]
  },
  {
	"il": "Kırklareli",
	"plaka": 39,
	"ilceleri": [
	  "Babaeski",
	  "Demirköy",
	  "Kofçaz",
	  "Lüleburgaz",
	  "Merkez",
	  "Pehlivanköy",
	  "Pınarhisar",
	  "Vize"
	]
  },
  {
	"il": "Kırşehir",
	"plaka": 40,
	"ilceleri": [
	  "Akçakent",
	  "Akpınar",
	  "Boztepe",
	  "Çiçekdağı",
	  "Kaman",
	  "Merkez",
	  "Mucur"
	]
  },
  {
	"il": "Kilis",
	"plaka": 79,
	"ilceleri": [
	  "Elbeyli",
	  "Merkez",
	  "Musabeyli",
	  "Polateli"
	]
  },
  {
	"il": "Kocaeli",
	"plaka": 41,
	"ilceleri": [
	  "Başiskele",
	  "Çayırova",
	  "Darıca",
	  "Derince",
	  "Dilovası",
	  "Gebze",
	  "Gölcük",
	  "İzmit",
	  "Kandıra",
	  "Karamürsel",
	  "Kartepe",
	  "Körfez"
	]
  },
  {
	"il": "Konya",
	"plaka": 42,
	"ilceleri": [
	  "Ahırlı",
	  "Akören",
	  "Akşehir",
	  "Altınekin",
	  "Beyşehir",
	  "Bozkır",
	  "Cihanbeyli",
	  "Çeltik",
	  "Çumra",
	  "Derbent",
	  "Derebucak",
	  "Doğanhisar",
	  "Emirgazi",
	  "Ereğli",
	  "Güneysınır",
	  "Hadim",
	  "Halkapınar",
	  "Hüyük",
	  "Ilgın",
	  "Kadınhanı",
	  "Karapınar",
	  "Karatay",
	  "Kulu",
	  "Meram",
	  "Sarayönü",
	  "Selçuklu",
	  "Seydişehir",
	  "Taşkent",
	  "Tuzlukçu",
	  "Yalıhüyük",
	  "Yunak"
	]
  },
  {
	"il": "Kütahya",
	"plaka": 43,
	"ilceleri": [
	  "Altıntaş",
	  "Aslanapa",
	  "Çavdarhisar",
	  "Domaniç",
	  "Dumlupınar",
	  "Emet",
	  "Gediz",
	  "Hisarcık",
	  "Merkez",
	  "Pazarlar",
	  "Simav",
	  "Şaphane",
	  "Tavşanlı"
	]
  },
  {
	"il": "Malatya",
	"plaka": 44,
	"ilceleri": [
	  "Akçadağ",
	  "Arapgir",
	  "Arguvan",
	  "Battalgazi",
	  "Darende",
	  "Doğanşehir",
	  "Doğanyol",
	  "Hekimhan",
	  "Kale",
	  "Kuluncak",
	  "Merkez",
	  "Pütürge",
	  "Yazıhan",
	  "Yeşilyurt"
	]
  },
  {
	"il": "Manisa",
	"plaka": 45,
	"ilceleri": [
	  "Ahmetli",
	  "Akhisar",
	  "Alaşehir",
	  "Demirci",
	  "Gölmarmara",
	  "Gördes",
	  "Kırkağaç",
	  "Köprübaşı",
	  "Kula",
	  "Merkez",
	  "Salihli",
	  "Sarıgöl",
	  "Saruhanlı",
	  "Selendi",
	  "Soma",
	  "Şehzadeler",
	  "Turgutlu",
	  "Yunusemre"
	]
  },
  {
	"il": "Mersin",
	"plaka": 33,
	"ilceleri": [
	  "Anamur",
	  "Akdeniz",
	  "Aydıncık",
	  "Bozyazı",
	  "Çamlıyayla",
	  "Erdemli",
	  "Gülnar",
	  "Mezitli",
	  "Mut",
	  "Silifke",
	  "Tarsus",
	  "Toroslar",
	  "Yenişehir"
	]
  },
  {
	"il": "Mardin",
	"plaka": 47,
	"ilceleri": [
	  "Artuklu",
	  "Dargeçit",
	  "Derik",
	  "Kızıltepe",
	  "Mazıdağı",
	  "Merkez",
	  "Midyat",
	  "Nusaybin",
	  "Ömerli",
	  "Savur",
	  "Yeşilli"
	]
  },
  {
	"il": "Muğla",
	"plaka": 48,
	"ilceleri": [
	  "Bodrum",
	  "Dalaman",
	  "Datça",
	  "Fethiye",
	  "Kavaklıdere",
	  "Köyceğiz",
	  "Marmaris",
	  "Menteşe",
	  "Milas",
	  "Ortaca",
	  "Seydikemer",
	  "Ula",
	  "Yatağan"
	]
  },
  {
	"il": "Muş",
	"plaka": 49,
	"ilceleri": [
	  "Bulanık",
	  "Hasköy",
	  "Korkut",
	  "Malazgirt",
	  "Merkez",
	  "Varto"
	]
  },
  {
	"il": "Nevşehir",
	"plaka": 50,
	"ilceleri": [
	  "Acıgöl",
	  "Avanos",
	  "Derinkuyu",
	  "Gülşehir",
	  "Hacıbektaş",
	  "Kozaklı",
	  "Merkez",
	  "Ürgüp"
	]
  },
  {
	"il": "Niğde",
	"plaka": 51,
	"ilceleri": [
	  "Altunhisar",
	  "Bor",
	  "Çamardı",
	  "Çiftlik",
	  "Merkez",
	  "Ulukışla"
	]
  },
  {
	"il": "Ordu",
	"plaka": 52,
	"ilceleri": [
	  "Akkuş",
	  "Altınordu",
	  "Aybastı",
	  "Çamaş",
	  "Çatalpınar",
	  "Çaybaşı",
	  "Fatsa",
	  "Gölköy",
	  "Gülyalı",
	  "Gürgentepe",
	  "İkizce",
	  "Kabadüz",
	  "Kabataş",
	  "Korgan",
	  "Kumru",
	  "Mesudiye",
	  "Perşembe",
	  "Ulubey",
	  "Ünye"
	]
  },
  {
	"il": "Osmaniye",
	"plaka": 80,
	"ilceleri": [
	  "Bahçe",
	  "Düziçi",
	  "Hasanbeyli",
	  "Kadirli",
	  "Merkez",
	  "Sumbas",
	  "Toprakkale"	
	]
  },
  {
	"il": "Rize",
	"plaka": 53,
	"ilceleri": [
	  "Ardeşen",
	  "Çamlıhemşin",
	  "Çayeli",
	  "Derepazarı",
	  "Fındıklı",
	  "Güneysu",
	  "Hemşin",
	  "İkizdere",
	  "İyidere",
	  "Kalkandere",
	  "Merkez",
	  "Pazar"
	]
  },
  {
	"il": "Sakarya",
	"plaka": 54,
	"ilceleri": [
	  "Adapazarı",
	  "Akyazı",
	  "Arifiye",
	  "Erenler",
	  "Ferizli",
	  "Geyve",
	  "Hendek",
	  "Karapürçek",
	  "Karasu",
	  "Kaynarca",
	  "Kocaali",
	  "Pamukova",
	  "Sapanca",
	 "Serdivan",
	  "Söğütlü",
	  "Taraklı"
	]
  },
  {
	"il": "Samsun",
	"plaka": 55,
	"ilceleri": [
	  "Alaçam",
	  "Atakum",
	  "Asarcık",
	  "Ayvacık",
	  "Bafra",
	  "Canik",
	  "Çarşamba",
	  "Havza",
	  "İlkadım",
	  "Kavak",
	  "Ladik",
	  "Ondokuzmayıs",
	  "Salıpazarı",
	  "Tekkeköy",
	  "Terme",
	  "Vezirköprü",
	  "Yakakent"
	]
  },
  {
	"il": "Siirt",
	"plaka": 56,
	"ilceleri": [
	  "Baykan",
	  "Eruh",
	  "Kurtalan",
	  "Merkez",
	  "Pervari",
	  "Şirvan",
	  "Tillo"
	]
  },
  {
	"il": "Sinop",
	"plaka": 57,
	"ilceleri": [
	  "Ayancık",
	  "Boyabat",
	  "Dikmen",
	  "Durağan",
	  "Erfelek",
	  "Gerze",
	  "Merkez",
	  "Saraydüzü",
	  "Türkeli"
	]
  },
  {
	"il": "Sivas",
	"plaka": 58,
	"ilceleri": [
	  "Akıncılar",
	  "Altınyayla",
	  "Divriği",
	  "Doğanşar",
	  "Gemerek",
	  "Gölova",
	  "Gürün",
	  "Hafik",
	  "İmranlı",
	  "Kangal",
	  "Koyulhisar",
	  "Merkez",
	  "Suşehri",
	  "Şarkışla",
	  "Ulaş",
	  "Yıldızeli",
	  "Zara"
]
  },
  {
	"il": "Şanlıurfa",
	"plaka": 63,
	"ilceleri": [
	  "Akçakale",
	  "Birecik",
	  "Bozova",
	  "Ceylanpınar",
	  "Eyyübiye",
	  "Halfeti",
	  "Haliliye",
	  "Harran",
	  "Hilvan",
	  "Karaköprü",
	  "Siverek",
	  "Suruç",
	  "Viranşehir"
	]
  },
  {
	"il": "Şırnak",
	"plaka": 73,
	"ilceleri": [
	  "Beytüşşebap",
	  "Cizre",
	  "Güçlükonak",
	  "İdil",
	  "Merkez",
	  "Silopi",
	  "Uludere"
	]
  },
  {
	"il": "Tekirdağ",
	"plaka": 59,
	"ilceleri": [
	  "Çerkezköy",
	  "Çorlu",
	  "Ergene",
	  "Hayrabolu",
	  "Kapaklı",
	  "Malkara",
	  "Marmaraereğlisi",
	  "Muratlı",
	  "Saray",
	  "Süleymanpaşa",
	  "Şarköy"
	]
  },
  {
	"il": "Tokat",
	"plaka": 60,
	"ilceleri": [
	  "Almus",
	  "Artova",
	  "Başçiftlik",
	  "Erbaa",
	  "Merkez",
	  "Niksar",
	  "Pazar",
	  "Reşadiye",
	  "Sulusaray",
	  "Turhal",
	  "Yeşilyurt",
	  "Zile"
	]
  },
  {
	"il": "Trabzon",
	"plaka": 61,
	"ilceleri": [
	  "Akçaabat",
	  "Araklı",
	  "Arsin",
	  "Beşikdüzü",
	  "Çarşıbaşı",
	  "Çaykara",
	  "Dernekpazarı",
	  "Düzköy",
	  "Hayrat",
	  "Köprübaşı",
	  "Maçka",
	  "Of",
	  "Ortahisar",
	  "Sürmene",
	  "Şalpazarı",
	  "Tonya",
	  "Vakfıkebir",
	  "Yomra"
	]
  },
  {
	"il": "Tunceli",
	"plaka": 62,
	"ilceleri": [
	  "Çemişgezek",
	  "Hozat",
	  "Mazgirt",
	  "Merkez",
	  "Nazımiye",
	  "Ovacık",
	  "Pertek",
	  "Pülümür"

	]
  },
  {
	"il": "Uşak",
	"plaka": 64,
	"ilceleri": [
	  "Banaz",
	  "Eşme",
	  "Karahallı",
	  "Merkez",
	  "Sivaslı",
	  "Ulubey"
	]
  },
  {
	"il": "Van",
	"plaka": 65,
	"ilceleri": [
	  "Bahçesaray",
	  "Başkale",
	  "Çaldıran",
	  "Çatak",
	  "Edremit",
	  "Erciş",
	  "Gevaş",
	  "Gürpınar",
	  "İpekyolu",
	  "Muradiye",
	  "Özalp",
	  "Saray",
	  "Tuşba"
	]
  },
  {
	"il": "Yalova",
	"plaka": 77,
	"ilceleri": [
	  "Altınova",
	  "Armutlu",
	  "Çınarcık",
	  "Çiftlikköy",
	  "Merkez",
	  "Termal"
	]
  },
  {
	"il": "Yozgat",
	"plaka": 66,
	"ilceleri": [
	  "Akdağmadeni",
	  "Aydıncık",
	  "Boğazlıyan",
	  "Çandır",
	  "Çayıralan",
	  "Çekerek",
	  "Kadışehri",
	  "Merkez",
	  "Saraykent",
	  "Sarıkaya",
	  "Sorgun",
	  "Şefaatli",
	  "Yerköy",
	  "Yenifakılı"
	]
  },
  {
	"il": "Zonguldak",
	"plaka": 67,
	"ilceleri": [
	  "Alaplı",
	  "Çaycuma",
	  "Devrek",
	  "Ereğli",
	  "Gökçebey",
	  "Merkez"
	]
  }
]

function search(nameKey, myArray){
	for (var i=""; i < myArray.length; i++) {
		if (myArray[i].plaka == nameKey) {
			return myArray[i];
		}
	}
}

$.each(data, function( index, value ) {
	$('.persFormC #fCity').append($('<option>', {
		value: value.il,
		text:  value.il
	}));
	$('.persFormC select').selectric('refresh');
});

$(".persFormC #fCity").change(function(){
	var valueSelected = this.value;
	if($('.persFormC #fCity').val() > "") {
	  $('.persFormC #fDistrict').html('');
	  $('.persFormC #fDistrict').append($('<option>', {
		value: "",
		text:  'Lütfen bir ilçe seçiniz'
	  }));
	  $('.persFormC #fDistrict').prop("disabled", false);
	  
	  var resultObject;
	  $.each(data, function(i, v) {
		if (v.il == $('.persFormC #fCity').val()) {
			resultObject = v;
			//alert(v);
			return;
		}
	  });
	  //var resultObject = search($('#fCity').val(), data);
	  $.each(resultObject.ilceleri, function( index, value ) {
		$('.persFormC #fDistrict').append($('<option>', {
			value: value,
			text:  value
		}));
	  });
	  $('.persFormC select').selectric('refresh');
	  return false;
	}
	$('.persFormC #fDistrict').prop("disabled", true);
});

function sendMonday(){
	
	var key = "_";
    
	var utm_source, utm_medium,utm_campaign, utm_term;
	var utm_source_val, utm_medium_val, utm_campaign_val, utm_term_val;
	var temp1, temp2, temp3, temp4;

	utm_source_val = window.parent.location.href.search("utm_source=");
	if (utm_source_val != -1) {
		temp1 = window.parent.location.href.substring((utm_source_val+11),window.parent.location.href.lenght);
		utm_source = temp1.substring(0,temp1.search(key));
	}

	utm_medium_val = window.parent.location.href.search("utm_medium=");
	if (utm_medium_val != -1) {
		temp2 = window.parent.location.href.substring((utm_medium_val+11),window.parent.location.href.lenght);
		utm_medium = temp2.substring(0,temp2.search(key));
	}
	
	utm_campaign_val = window.parent.location.href.search("utm_campaign=");
	if (utm_campaign_val != -1) {
		temp3 = window.parent.location.href.substring((utm_campaign_val+13),window.parent.location.href.lenght);
		utm_campaign = temp3.substring(0,temp3.search(key));
	}

	utm_term_val = window.parent.location.href.search("utm_term=");
	if (utm_term_val != -1) {
		temp4 = window.parent.location.href.substring((utm_term_val+9),window.parent.location.href.lenght);
		utm_term = temp4.substring(0,temp4.search(key));
	}
	
	var ad = $(".persFormC #fName").val();
	var tel = $(".persFormC #fPhone").val().replace(/-/g, "").replace(/ /g, "").replace(/\(|\)/g, "");
	var mail = $(".persFormC #fEmail").val();
	var il = $(".persFormC #fCity").val();
	var ilce = $(".persFormC #fDistrict").val();
	var kurumsal = "2";
	var mustakil = $(".persFormC #mustakil").val();
	
	const monday = window.mondaySdk();

	if (kurumsal == "2") {
		kurumsal = "Bireysel";
	}
	if (mustakil == "1") {
		mustakil = "Evet";
	} else if (mustakil == "2"){
		mustakil = "Hayır";
	}
	
	monday.setToken(token);
	monday.api('mutation { create_item(board_id: 4222715493, item_name:  "'+ ad +'"){ id } }').then(res => {
		
		//alert("Aaaa");

		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "uzun_metin", value: "'+ document.URL +'") {id}}');                    
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "uzun_metin_1", value: "'+document.location+'") {id}}');
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "uzun_metin_2", value: "'+window.parent.location+'") {id}}');
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "uzun_metin_3", value: "'+window.parent.URL+'") {id}}');
		
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "a__lan_liste", value: "'+il+'" ,create_labels_if_missing: true) {id}}');
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "metin8", value: "'+ilce+'") {id}}');
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "e_posta", value: "'+ mail +" "+ mail +'") {id}}');

		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "numaralar_", value: "'+tel+'") {id}}');
		monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "durum3", value: "'+kurumsal+'") {id}}');

		if ((mustakil != "0" && kurumsal == "Bireysel")) {
			monday.api('mutation { change_simple_column_value(item_id: '+ res.data['create_item'].id +', board_id: 4222715493, column_id: "durum", value: "'+ mustakil +'") {id}}');
		} 

		if(utm_source_val != -1){
			monday.api('mutation {  change_simple_column_value (board_id: 4222715493,  item_id: '+ res.data['create_item'].id +', column_id: "durum58",    value: "'+ utm_source +'"  ,create_labels_if_missing: true) { id}}');
		}
		if (utm_medium_val != -1) {
			monday.api('mutation {  change_simple_column_value (board_id: 4222715493,  item_id: '+ res.data['create_item'].id +', column_id: "durum_15",    value: "'+ utm_medium +'"  ,create_labels_if_missing: true) { id}}');
		}

		if (utm_campaign_val != -1) {
			monday.api('mutation {  change_simple_column_value (board_id: 4222715493,  item_id: '+ res.data['create_item'].id +', column_id: "durum_2",    value: "'+ utm_campaign +'"  ,create_labels_if_missing: true) { id}}');
		}

		if (utm_term_val != -1) {
			monday.api('mutation {  change_simple_column_value (board_id: 4222715493,  item_id: '+ res.data['create_item'].id +', column_id: "durum4",    value: "'+ utm_term +'"  ,create_labels_if_missing: true) { id}}');
		}
		
		//alert("Bbbb");
		
		fetch ("https://api.monday.com/v2", {
			method: 'post',
			headers: {
				'Content-Type': 'application/json',
				'Authorization' : token
			},
			body: JSON.stringify({
				query : "mutation ($myBoardId:Int!, $myItemId:Int!, $myColumnValues:JSON!) { change_multiple_column_values(item_id:$myItemId, board_id:$myBoardId, column_values: $myColumnValues) { id }}",
				variables : JSON.stringify({
				myBoardId: 4222715493,
				myItemId: parseInt( res.data['create_item'].id),
				myColumnValues: "{\"telefon\" : {\"phone\" : \"0" +tel+ "\", \"countryShortName\" : \"TR\"}}"
				})
			})
		});
		
		$('#formArea').slideUp();
		$('.persFormC #formSuccess p').html("Form başarıyla gönderilmiştir. Teşekkür ederiz.");
		$('.persFormC #formSuccess').fadeIn();
		parent.location.hash = "formSuccess";
		$('#applyForm')[0].reset();

	});
	return false;
}

$(document).ready(function() {
	
	jQuery.extend(jQuery.validator.messages, {
		required: "Bu alan zorunludur.",
		email: "Lütfen geçerli bir E-posta adresi giriniz.",
		number: "Lütfen sadece rakam giriniz.",
		maxlength: jQuery.validator.format("En fazla {0} karakter olmalı."),
		minlength: jQuery.validator.format("En az {0} karakter olmalı."),
	});
	
	$(".persFormC #applyForm").validate({
		rules: {
			fName: {
				required: true,
				minlength: 5,
				maxlength: 100
			},
			fPhone: {
				required: true,
				minlength: 14
			},
			fEmail: {
				required: true,
				maxlength: 50
			},
			fCity: {
				required: true
			},
			fDistrict: {
				required: true
			}
		},
		messages: {
			fPhone: {
				required: 'Lütfen geçerli bir telefon numarası giriniz.',
				minlength: 'Lütfen telefon numaranızı doğru giriniz.',
			}
		},
		errorElement: "span",
		errorPlacement: function(error, element) {
			error.appendTo(element.parents(".errItem"));
		},
		submitHandler: function(form) {	
			
			sendMonday();
			
			/*
			var submitbutton = $('#applyFormSend');
			
			$.ajax({    
				url: "https://www.solino.com.tr/ajax/sendEmail.php",
				type: "POST",
				data: contFormData,
				//dataType: 'json',
				async: false,
				
				beforeSend: function() { 
					submitbutton.disabled = true;
				},
				success: function(msg) {
					// Message was sent
					if (msg == 'OK') {
					   $('#formError').hide();
					   $('#formSuccess').fadeIn();
					   $('#contactForm')[0].reset();
					}
					else {
						$('#formError').fadeIn();
						submitbutton.disabled = false;
						$('#contactForm')[0].reset();
					}
				},
				error: function() {
					$('#formError').fadeIn();
					submitbutton.disabled = false;
					submitbutton.removeClass("loading");
					submitbutton.html("Submit");
				}
			});
			*/
			
		}
	});
	
	
});