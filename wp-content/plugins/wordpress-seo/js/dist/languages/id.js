(()=>{"use strict";var a={d:(i,e)=>{for(var n in e)a.o(e,n)&&!a.o(i,n)&&Object.defineProperty(i,n,{enumerable:!0,get:e[n]})},o:(a,i)=>Object.prototype.hasOwnProperty.call(a,i),r:a=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(a,"__esModule",{value:!0})}},i={};a.r(i),a.d(i,{default:()=>pa});const e=window.yoast.analysis,n=["sebuah","seorang","sang","si","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas","seratus","seribu","sejuta","semiliar","setriliun","ini","itu","hal","ia"],s=["adakalanya","agak","agar","akhirnya","alhasil","andaikan","bahkan","bahwasannya","berikut","betapapun","biarpun","biasanya","contohnya","dahulunya","diantaranya","dikarenakan","disebabkan","dulunya","faktanya","hasilnya","intinya","jadi","jua","juga","kadang-kadang","kapanpun","karena","karenanya","kedua","kelak","kemudian","kesimpulannya","khususnya","langsung","lantaran","maka","makanya","masih","memang","meski","meskipun","misalnya","mulanya","nantinya","nyatanya","pendeknya","pertama","ringkasnya","rupanya","seakan-akan","sebaliknya","sebelum","sebetulnya","sedangkan","segera","sehingga","sekali-sekali","sekalipun","sekiranya","selagi","selain","selama","selanjutnya","semasa","semasih","semenjak","sementara","semula","sepanjang","serasa","seraya","seringkali","sesungguhnya","setelahnya","seterusnya","setidak-tidaknya","setidaknya","sewaktu-waktu","sewaktu","tadinya","tentunya","terakhir","terdahulu","terlebih","ternyata","terpenting","terutama","terutamanya","tetapi","umpamanya","umumnya","utamanya","walau","walaupun","yaitu","yakni","akibatnya","hingga","kadang","kendatipun","ketiga","lainnya","manakala","namun","pastinya","pertama-tama","sampai-sampai","sebaliknya","sebelumnya","sebetulnya","sesekali"],t=s.concat(["agar supaya","akan tetapi","apa lagi","asal saja","bagaimanapun juga","bahkan jika","bahkan lebih","begitu juga","berbeda dari","biarpun begitu","biarpun demikian","bilamana saja","cepat atau lambat","dalam hal ini","dalam jangka panjang","dalam kasus ini","dalam kasus lain","dalam kedua kasus","dalam kenyataannya","dalam pandangan","dalam situasi ini","dalam situasi seperti itu","dan lagi","dari awal","dari pada","dari waktu ke waktu","demikian juga","demikian pula","dengan serentak","dengan cara yang sama","dengan jelas","dengan kata lain","dengan ketentuan","dengan nyata","dengan panjang lebar","dengan pemikiran ini","dengan syarat bahwa","dengan terang","di pihak lain","di sisi lain","dibandingkan dengan","disebabkan oleh","ditambah dengan","hanya jika","harus diingat","hasil dari","hingga kini","kalau tidak","kalau-kalau","kali ini","kapan saja","karena alasan itulah","karena alasan tersebut","kecuali kalau","kendatipun begitu","kendatipun demikian","lebih jauh","lebih lanjut","maka dari itu","meskipun demikian","oleh karena itu","oleh karenanya","oleh sebab itu","pada akhirnya","pada awalnya","pada dasarnya","pada intinya","pada kenyataannya","pada kesempatan ini","pada mulanya","pada saat ini","pada saat","pada situasi ini","pada umumnya","pada waktu yang sama","pada waktunya","paling tidak","pendek kata","penting untuk disadari","poin penting lainnya","saat ini","sama halnya","sama pentingnya","sama sekali","sampai sekarang","sebab itu","sebagai akibatnya","sebagai contoh","sebagai gambaran","sebagai gantinya","sebagai hasilnya","sebagai tambahan","sebelum itu","secara bersamaan","secara eksplisit","secara keseluruhan","secara keseluruhan","secara khusus","secara menyeluruh","secara signifikan","secara singkat","secara umum","sejalan dengan ini","sejalan dengan itu","sejauh ini","sekali lagi","sekalipun begitu","sekalipun demikian","sementara itu","seperti yang bisa dilihat","seperti yang sudah saya katakan","seperti yang sudah saya tunjukkan","sesudah itu","setelah ini","setelah itu","tak pelak lagi","tanpa menunda-nunda lagi","tentu saja","terutama sekali","tidak perlu dipertanyakan lagi","tidak sama","tidak seperti","untuk alasan ini","untuk alasan yang sama","untuk memperjelas","untuk menekankan","untuk menyimpulkan","untuk satu hal","untuk sebagian besar","untuk selanjutnya","untuk tujuan ini","walaupun demikian","yang lain","yang terakhir","yang terpenting","begitu pula","berbeda dengan","betapapun juga","dalam hal itu","di samping itu","hal pertama yang perlu diingat","kadang kala","karena itu","lagi pula","lambat laun","mengingat bahwa","meskipun begitu","pada umumnya","pada waktu","saat ini juga","sampai saat ini","sebagian besar","secara terperinci","selain itu","seperti yang sudah dijelaskan","seperti yang tertera di","tak seperti","tanpa memperhatikan","tentu saja","untuk memastikan","untuk menggambarkan","walaupun begitu"]);function u(a){let i=a;return a.forEach((e=>{(e=e.split("-")).length>0&&e.filter((i=>!a.includes(i))).length>0&&(i=i.concat(e))})),i}const r=["si","sang","kaum","sri","hang","dang","para"],d=["nol","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas","seratus","seribu","sejuta","semiliar","setriliun"],k=["kesatu","pertama","kedua","ketiga","keempat","kelima","keenam","ketujuh","kedelapan","kesembilan","kesepuluh","kesebelas","keseratus","keseribu"],l=["aku","saya","engkau","kau","kamu","anda","kita","kami","kalian","ia","dia","beliau","mereka","dikau","daku","beta","sayalah","engkaulah","kaulah","kamulah","andalah","kitalah","kamilah","kalianlah","dialah","kamu-kamu","saya-saya","mereka-mereka","beliau-beliau","anda-anda","mereka-merekalah","beliau-beliaulah","kamu-kamulah","anda-andalah"],m=["yang"],g=["ini","itu","tersebut","tadi","inilah","itulah"],p=["milikku","milikmu","miliknya","punyanya","punyaku","punyamu","kepunyaannya","kepunyaanmu","kepunyaanku"],h=["belasan","puluhan","ribuan","miliaran","triliunan","setengah","seperdua","sepertiga","seperempat","seperlima","seperenam","sepertujuh","seperdelapan","sepersembilan","sepersepuluh","sedikit","setiap","banyak","semua","lebih","kurang","sebagian","cukup","beberapa","berpuluh-puluh","beratus-ratus","beribu-ribu","berjuta-juta","ratusan","paling","tiap-tiap"],o=["diriku","dirinya","dirimu"],b=["lain","lainnya","seseorang","sesuatu","siapa-siapa","apa-apa","semuanya","segalanya","seluruhnya","keduanya","ketiganya","ketiga-tiganya","kedua-duanya","dua-duanya","tiga-tiganya","masing-masing","apapun","siapapun","manapun","sedemikian","demikian"],y=["apa","manakah","mana","apanya","inikah","itukah","manalagi"],c=["siapa","siapakah","kamukah","andakah","sayakah","akukah","diakah","merekakah","engkaukah","kamikah","kitakah","beliaukah","iakah","dirinyakah","dirikukah","siapatah","siapalah","siapanya"],f=["bagaimana","mengapa","kenapa","kapan","berapa","kapankah","berapakah","bagaimanakah","apakah","kapanpun","apatah","apalah","berapatah","berapalah","mengapakah","mengapatah","mengapalah","kenapakah","kenapatah","kenapalah","kapantah","kapanlah","manatah","mananya","manalah","bagaimanatah","bagaimanalah","bilamana","bilamanakah","bilamanatah","bilamananya","bilamanalah","keberapa","mampukah","beginikah","begitukah"],j=["selalu","sekali","berkali-kali"],S=["dapat","dapatkah","bisa","bisakah","boleh","bolehkah","akan","akankah","bukan","dapatlah","bisatah","bisanya","bisalah","bolehtah","bolehnya","bolehlah","akantah","akannya","akanlah","harus","haruskah","harustah","harusnya","haruslah","bukankah","bukantah","bukannya","bukanlah","mungkin","mungkinkah","mungkintah","mungkinlah","belum","belumkah","belumlah","sudah","sudahkah","sudahlah","takkan","masih","masihkah","pernah","pernahkah"],w=["adalah","ialah","merupakan","ada","berada"],W=["antara","seantero","bagai","bagaikan","bagi","buat","dari","demi","dengan","di","terhadap","menjelang","ke","kecuali","sekeliling","mengenai","sekitar","melalui","selama","lepas","lewat","oleh","selewat","pada","sepanjang","per","seputar","bersama","sejak","semenjak","seperti","serta","tentang","menuju","menurut","untuk","tanpa","adapun","antar","diantara","silam","lalu","selaku","melalui","sebagai","bahwasanya"],x=["atas","bawah","dalam","luar","depan","belakang","sebelah","samping"],P=["dan","atau","lalu","kemudian","serta","sedangkan","sementara","sambil","seraya","ataupun","ataukah"],N=["maupun","bukan","begitu","baru","hanya"],v=["setelah","sehabis","sejak","sampai","ketika","waktu","tatkala","saat","kalau","jika","jikalau","bila","bilamana","apabila","asal","asalkan","seandainya","andaikata","sekiranya","karena","sebab","lantaran","gara-gara","mentang-mentang","kalau-kalau","supaya","agar","guna","sehingga","hingga","sampai","sebelum","sesudah","meski","meskipun","kendati","kendatipun","walau","walaupun","sekalipun","biarpun","sungguhpun","padahal","seakan-akan","seolah-olah","daripada","alih-alih","melainkan","apalagi","bahwa","saja"],R=["kata","bilang","berkata","mengeklaim","bertanya","menayakan","menyatakan","tanya","klaim","jelas","jelaskan","menjelaskan","dijelaskan","ditanya","pikir","berpikir","berbicara","membicarakan","mengumumkan","diumumkan","dibicarakan","mendiskusikan","menyarankan","disarankan","mengerti"],O=["sangat","amat","terlalu","terlampau","sungguh","serba","agak","begitu","demikian","makin","semakin","kian","tambah","bertambah","begini","amatlah"],B=["ada","punya","milik","terlihat","kelihatan","mari","marilah","membuat","dibuat","menunjukkan","ditunjukkan","pergi","ambil","diambil","meletkakkan","letakkan","ambilkan","mencoba","dicoba","bermakna","berarti","terdiri","memastikan","dipastikan","mengandung","termasuk","maknanya","artinya","ingin","inginkan"],E=["terbesar","besar","terkecil","kecil","terbaru","baru","tertua","tua","lalu","semudah","termudah","mudah","cepat","jauh","susah","keras","panjang","rendah","pendek","tinggi","biasa","simpel","kebanyakan","baru-baru","lagi","selesai","mungkin","umum","baik","buruk","bagus","utama","sama","tertentu","biasanya","spesifik","langsung","dekat","terbaru","berbeda","beda","sibuk","terkini","penting","terpenting","sebesar","sekecil","setua","termuda","semuda","muda","tercepat","secepat","termudah","semudah","terjauh","sejauh","tersusah","sesusah","terkeras","sekeras","sepanjang","terpanjang","terpendek","sependek","terbiasa","tersimpel","sesimpel","terbaik","sebaik","terburuk","seburuk","sebagus","terbagus","terutama","terdekat","sedekat","tersibuk","sepenting","lambat","terlambat","luas","terluas","seluas","keren","tersedia","cepat-cepat","erat-erat","betul-betul","diam-diam","keras-keras","jauh-jauh","secepat-cepatnya","baik-baik","sebaik-baiknya","sekeras-kerasnya","lekas-lekas","selekas-lekasnya","tinggi-tinggi","setinggi-tingginya","seberat-beratnya","sejauh-jauhnya","sedikit-dikitnya","sekurang-kurangnya","setidak-tidaknya","sedapat-dapatnya","seenak-enaknya","seenaknya","seadanya","sekenanya","selambat-lambatnya","selebih-lebihnya","sedikitnya","sepenuhnya","besar-besaran","kecil-kecilan","habis-habisan","mati-matian","terang-terangan","terus-terusan","untung-untungan","kesekian","berdua-dua","bertiga-tiga","berdua","bertiga","berempat","berlima","berenam","bertujuh","berdelapan","bersembilan","bersepuluh","bersebelas","berseratus","berseribu","berduaan","agaknya","sepenting-pentingnya","sepanjang-panjangnya","spesifik","spesial","semuda-mudanya","setua-tuanya","seburuk-buruknya","seluas-luasnya","terlebih","selamanya","selama-lamanya","mampu","begini","beginilah","begitu","begitulah","sebegini","sebegitu","semula","pasti","pastilah","pastinya","dini","sedini","sering","seringnya","jarang","terbanyak"],F=["bah","cis","ih","idih","sialan","buset","aduh","waduh","duh","aduhai","amboi","asyik","wah","syukur","alhamdulillah","untung","aduh","aih","aih","lo","duilah","eh","oh","ah","astaga","astagfirullah","masyaallah","masa","alamak","gila","ayo","yuk","mari","hai","he","hai","halo"],M=["sdm","sdt","gr","kg","cm","mg","ml","l","dl","cl","ons","lbr","cc","bh","ltr","pon"],T=["detik","menit","jam","detik-detik","menit-menit","jam-jam","hari","hari-hari","minggu","minggu-minggu","bulan","bulan-bulan","tahun","tahun-tahun","besok","kemarin","lusa","malam-malam","siang-siang","subuh","bedug","keesokan"],A=["cara","barang","masalah","bagian","bagian-bagian","aspek","aspek-aspek","ide","item","tema","hal","perkara","faktor","faktor-faktor","detil","perbedaan","adanya","beginian","rupanya","diri"],C=["tidak","iya","tak","tentu","ok","oke","amin","dll","maaf","tolong","mohon","jangan","sebagainya","hanya","cuma","jangankan","janganlah","tolonglah"],$=(u(["lah","pun","dong","kan","sih","toh","nah","lho","kok","ding"]),u([].concat(k,["sebuah","seorang","seekor","sebiji","selembar","secarik","sehelai","sebutir","sebatang","sebidang","sebentuk","sebilah","sekuntum","sepatah","sepucuk","setangkai","seutas","sebelah","segenggam","segugus","sepiring","sejenis","semacam","sepotong","setetes","suatu"])),u([].concat(r,P,g,O,p,["bu","pak","bang","nak","kak","dik"])),u([].concat(j,l,o,F,d,S,w,R,B,b,N,v,y,c,f,["putus-putusnya","jemu-jemunya","jera-jeranya","puas-puasnya","bosan-bosannya","henti-hentinya","berhenti-hentinya"],C,x,M,T,A,E,m,W,h,s)),u([].concat(r,d,k,g,p,o,l,h,b,y,c,f,x,j,S,w,W,P,N,v,R,["yakni","yaitu","artinya","awalnya","akhirnya","makanya","malahan","malah","memang","nantinya","nanti","pula","seketika","sekarang","benar-benar","kadang","justru","tetapi","tapi"],O,B,F,E,M,A,C,["tuan","nyonya","nona","bang","pak","bu","bang","kak","prof","gus","ning","kyai","ustad","ustadzah","nyai","raden","tengku"],m,s,T))),_=[["baik","maupun"],["bukan","melainkan"],["bukan","tetapi"],["bukannya","melainkan"],["bukannya","tetapi"],["tidak","melainkan"],["tidak","tetapi"],["tidak hanya","tetapi juga"],["begitu","sehingga"],["begitu","sampai"],["demikian","sehingga"],["demikian","sampai"],["sedemikian","sehingga"],["sedemikian","sampai"],["meskipun","namun"],["biarpun","namun"],["bukan hanya","melainkan juga"],["sedemikian rupa","sehingga"],["sebaiknya","daripada"],["entah","entah"],["kalau","maka"],["apabila","maka"],["apa","atau"],["jangankan","pun"],["saja","apalagi"],["apakah","atau"]],L=window.lodash,{buildFormRule:q,createRulesFromArrays:z}=e.languageProcessing,D=["a","e","i","o","u"];function H(a){let i=0;for(let n=0;n<a.length;n++)e=a[n],D.includes(e)&&i++;var e;return i}function I(a,i,e,n){if(e.includes(a))return a;const s=n.stemming.doNotStemWords.doNotStemK;if(a.endsWith("kan")){const i=a.substring(0,a.length-2);s.includes(i)&&(a=i)}const t=z(i);return q(a,t)||a}function K(a,i,e){const n=a.slice(i);return e.some((a=>n.startsWith(a)))}const{flattenSortLength:G,buildFormRule:J,createRulesFromArrays:Q}=e.languageProcessing,U=function(a,i){if((a.startsWith("ber")||a.startsWith("per"))&&K(a,3,i.stemming.beginningModification.rBeginning))return a.replace(/^(ber|per)/i,"r");if(/^peng/i.test(a)&&K(a,4,i.stemming.beginningModification.kBeginning))return a.replace(/^peng/i,"k");const e=Q(i.stemming.regexRules.removeSecondOrderPrefixes);return J(a,e)||a},V=function(a,i){let e=a.length;const n=i.stemming.regexRules.removeSuffixes,s=i.stemming.doNotStemWords.doNotStemSuffix,t=G(i.stemming.doNotStemWords.doNotStemPrefix.doNotStemFirstOrderPrefix),u=G(i.stemming.doNotStemWords.doNotStemPrefix.doNotStemSecondOrderPrefix);return t.some((i=>a.startsWith(i)))||(a=function(a,i){const e=function(a,i){const e=i.stemming.beginningModification;if(/^[mp]en/i.test(a)&&K(a,3,e.nBeginning))return a.replace(/^[mp]en/i,"n");if(/^[mp]eng/i.test(a)&&K(a,4,e.kBeginning))return a.replace(/^[mp]eng/i,"k");if(/^[mp]em/i.test(a)){if(K(a,3,e.pBeginning))return a.replace(/^(mem|pem)/i,"p");if(K(a,3,e.mBeginning))return a.replace(/^(mem|pem)/i,"m")}const n=function(a,i){const e=a.stemming.doNotStemWords.doNotStemPrefix.doNotStemFirstOrderPrefix.doNotStemTer;if(i.startsWith("keter")&&(i=i.substring(2,i.length)),i.startsWith("ter"))return e.some((a=>i.startsWith(a)))?i:K(i,3,a.stemming.beginningModification.rBeginning)?i.replace(/^ter/i,"r"):i.substring(3,i.length)}(i,a);return n||void 0}(a,i);if(e)return e;const n=Q(i.stemming.regexRules.removeFirstOrderPrefixes);return J(a,n)||a}(a,i)),e===a.length?(u.some((i=>a.startsWith(i)))||(a=U(a,i)),H(a)>2&&(a=I(a,n,s,i))):(e=a.length,H(a)>2&&(a=I(a,n,s,i)),e===a.length||u.includes(a)||H(a)>2&&(a=U(a,i))),a},X=function(a,i){a=function(a,i){const e=i.stemming.singleSyllableWords,n=i.stemming.singleSyllableWordsSuffixes,s=a;if(a=function(a,i){return a.startsWith("di")&&K(a,2,i.stemming.singleSyllableWords)?a.substring(2,a.length):/^[mp]enge/i.test(a)&&K(a,5,i.stemming.singleSyllableWords)?a.substring(5,a.length):a}(a,i),e.some((i=>a.startsWith(i)))&&H(a)<=3&&function(a,i){for(const e of i)if(a.match(e))return!0}(a,n)){a=I(a,i.stemming.regexRules.removeParticle,i.stemming.doNotStemWords.doNotStemParticle,i),a=I(a,i.stemming.regexRules.removePronoun,i.stemming.doNotStemWords.doNotStemPronounSuffix,i);const n=I(a,i.stemming.regexRules.removeSuffixes,i.stemming.doNotStemWords.doNotStemSuffix,i);e.includes(n)&&(a=n)}return(H(a)>1||1===a.length)&&(a=s),a}(a,i);const e=i.stemming.doNotStemWords.doNotStemParticle,n=i.stemming.doNotStemWords.doNotStemPronounSuffix;if(H(a)<=2)return a;const s=V(a,i);return e.includes(s)||n.includes(s)?s:(H(a=I(a,i.stemming.regexRules.removeParticle,e,i))>2&&(a=I(a,i.stemming.regexRules.removePronoun,n,i)),H(a)>2&&(a=V(a,i)),a)},{baseStemmer:Y}=e.languageProcessing;function Z(a){const i=(0,L.get)(a.getData("morphology"),"id",!1);return i?a=>function(a,i){if(i.stemming.shouldNotBeStemmed.includes(a))return a;const e=function(a,i){if(-1===a.indexOf("-"))return null;const e=a.split("-");if(2===e.length){let a=e[0],n=e[1];if(a=X(a,i),n=X(n,i),a.substring(1)===(n.startsWith("ng")||n.startsWith("ny")?n.substring(2):n.substring(1))){const e=i.stemming.nonPluralReduplications;return e.includes(a)&&e.includes(n)?a+"-"+a:a}}return null}(a,i);return e||X(a,i)}(a,i):Y}const aa=["diskontinuitas","diskualifikasi","diskriminatif","diskriminator","digitalisasi","disinformasi","disintegrasi","diskriminasi","disorientasi","distabilitas","diktatorial","disinfektan","disinsentif","diskrepansi","distributor","diagnostik","dialketika","diktatoris","dinosaurus","diplomatik","diplomatis","direktorat","dirgantara","disimilasi","diskontinu","diskulpasi","disparitas","dispensasi","distilator","distingtif","distribusi","diversitas","diafragma","diagnosis","diakritik","diakronis","dialektal","dialektik","dialektis","digenesis","digitalis","dilematik","diminutif","dinamisme","dingklang","diplomasi","dirgahayu","disertasi","disfungsi","diskredit","diskursif","disleksia","dislokasi","dismutasi","disonansi","disosiasi","dispenser","disposisi","distilasi","distingsi","divestasi","diabeter","diagonal","dialisis","diameter","diaspora","difraksi","digestif","diglosia","dikotomi","diktator","dilatasi","dimorfik","dinamika","dioksida","diopsida","diplomat","direktur","disentri","disensus","disiplin","diskotek","diskresi","dispersi","disrupsi","distansi","distorsi","diagram","difabel","digdaya","digital","digresi","diletan","dimensi","dinamik","dinamis","dinamit","dinasti","dioksin","diorama","diploma","diptera","direksi","dirigen","disagio","disiden","disjoki","diskoid","diskusi","disuasi","dividen","diadem","diakon","dialek","dialog","diaper","diayah","diesel","dilasi","dinamo","diniah","diorit","diare","diode","didih","didik","didis","digit","dikau","dikir","diksi","dikte","dinas","dipan","dirah","direk","disko","dinda","difusi","dilema","dingin","diniah","diorit","dirham","disket","diskon","divisi","diftong","difteri","dinding","dingkis","dingkit","dioksin","diorama","diploma","dirigen","disiden","displin","disjoki","diskusi","distrik","dividen","digestif","diglosia","dikotomi","dingklik","dioksida","diplomat","direktur","disentri","diskresi","disorder","dispersi","distansi","disrupsi","divergen","dingklang","diplomasi","dirgahayu","disertasi","disfungsi","disilabik","diskredit","disleksia","dislokasi","disosiasi","dispenser","disposisi","distilasi","dinosaurus","diplomatik","diplomatis","dirgantara","disimilasi","diskontinu","disparitas","distilator","distribusi","divergensi","diversitas","disabilitas","disinfektan","diskrepansi","disintegrasi","diskriminasi","diskriminatif","diskontinuitas","diskualifikasi"],{getWords:ia}=e.languageProcessing;function ea(a){const i=ia(a.toLowerCase());let e=i.filter((a=>a.length>4));if(e=e.filter((a=>a.startsWith("di"))),0===e.length)return!1;for(const a of aa)e=e.filter((i=>!i.startsWith(a)));return e=e.filter((function(a){let e=!0;const n=i.indexOf(a);return"untuk"===i[n-1]&&(e=!1),e})),0!==e.length}const na="\\–\\-\\(\\)_\\[\\]’‘“”〝〞〟‟„\"'.?!:;,¿¡«»‹›—×+&۔؟،؛。｡！‼？⁇⁉⁈‥…・ー、〃〄〆〇〈〉《》「」『』【】〒〓〔〕〖〗〘〙〚〛〜〝〞〟〠〶〼〽｛｝｜～｟｠｢｣､［］･￥＄％＠＆＇（）＊／：；＜＞＼\\<>",sa=(na.split(""),new RegExp("^["+na+"]+")),ta=new RegExp("["+na+"]+$"),ua=new Map([["amp;","&"],["lt;","<"],["gt;",">"],["quot;",'"'],["apos;","'"],["ndash;","–"],["mdash;","—"],["copy;","©"],["reg;","®"],["trade;","™"],["pound;","£"],["yen;","¥"],["euro;","€"],["dollar;","$"],["deg;","°"],["asymp;","≈"],["ne;","≠"],["nbsp;"," "]]),ra=(new RegExp("&("+[...ua.keys()].join("|")+")","ig"),new Map);ua.forEach(((a,i)=>ra.set("#"+i,a)));const da=new RegExp("^("+[...ra.keys()].join("|")+")"),ka=new RegExp("("+[...ra.keys()].join("|")+")$"),la=/([\s\t\u00A0\u2013\u2014[\]])/,ma=function(a){if(!a)return[];return(a=>{const i=[];return a.forEach((a=>{const e=[],n=[];for(;sa.test(a)&&!da.test(a);)e.push(a[0]),a=a.slice(1);for(;ta.test(a)&&!ka.test(a);)n.unshift(a[a.length-1]),a=a.slice(0,-1);let s=[...e,a,...n];s=s.filter((a=>""!==a)),i.push(...s)})),i})(a.split(la).filter((a=>""!==a)))},{AbstractResearcher:ga}=e.languageProcessing;class pa extends ga{constructor(a){super(a),delete this.defaultResearches.getFleschReadingScore,Object.assign(this.config,{language:"id",passiveConstructionType:"morphological",firstWordExceptions:n,functionWords:$,transitionWords:t,twoPartTransitionWords:_,areHyphensWordBoundaries:!1}),Object.assign(this.helpers,{getStemmer:Z,isPassiveSentence:ea,splitIntoTokensCustom:ma})}}(window.yoast=window.yoast||{}).Researcher=i})();