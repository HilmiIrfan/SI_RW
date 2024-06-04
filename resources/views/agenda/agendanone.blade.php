@extends('none.template')

@section('content')
    <style>
        /* Style for the container holding agenda and berita sections */
        .content-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        /* Style for individual sections */
        .content-section {
            flex: 1;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 15px;
        }

        .content-section h2 {
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .content-section ul {
            list-style: none;
            padding: 0;
        }

        .content-section li {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .content-section li:last-child {
            border-bottom: none;
        }

        /* Style for table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Style for images */
        .news-image {
            max-width: 50%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        /* Style for pop-up */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            display: none;
        }

        /* Style for close button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>

    <div class="content-container">
        <div class="content-section">
            <h2>AGENDA</h2>
            <table>
                <thead>
                    <tr>
                        <th>Agenda</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://1.bp.blogspot.com/-6AkFw-U102s/WlOGug90TYI/AAAAAAAAABg/Usch1OUZ3Loj9y3R-HbVxPrGrHykTAx7ACEwYBhgL/s1600/Picture-1_Gotong-Royong.jpg"
                                alt="Gotong-Royong" class="news-image"
                                onclick="showPopup('Gotong Royong', '1 Juni 2024', 'Telah dilakukan Gotong Royong')"></td>
                        <td>1 Juni 2024</td>
                    </tr>
                    <tr>
                        <td><img src="https://img.inews.co.id/media/822/files/inews_new/2020/08/15/lomba_17an.jpg"
                                alt="Lomba 17-Agustus-1945" class="news-image"
                                onclick="showPopup('Lomba 17-Agustus-1945', '17 Agustus 2023', 'Pada hari kemerdekaan, RW dan Warga mengadakan lomba untuk merayakan hari kemerdekaan dengan hadiah yang menggiurkan')">
                        </td>
                        <td>17 Agustus 2023</td>
                    </tr>
                    <tr>
                        <td><img src="https://memox.co.id/wp-content/uploads/2021/04/Koramil-Tongas-Dampingi-Pembagian-Bansos-1024x576.jpg"
                                alt="Pembagian Bansos" class="news-image"
                                onclick="showPopup('Pembagian Bansos', '12 Mei 2022', 'Telah di selenggarakan pembagian Bansos pada yang kurang mampu')">
                        </td>
                        <td>12 Mei 2022</td>
                    </tr>

                    <tr>
                        <td><img src="https://kel-pakelan.kedirikota.go.id/wp-content/uploads/2019/11/WhatsApp-Image-2019-11-19-at-14.11.08.jpeg"
                                alt="Rapat RT dan RW" class="news-image"
                                onclick="showPopup('Rapat RT dan RW', '26 Desember 2023', 'Telah di selenggarkan rapat dengan membahas perencanaan untuk ke depan')">
                        </td>
                        <td>26 Desember 2023</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="content-section">
            <h2>BERITA</h2>
            <ul>
                <li>
                    <h3>PSI Resmi Usung Khofifah-Emil Dardak di Pilgub Jatim 2024</h3>
                    <img src="https://cdn0-production-images-kly.akamaized.net/_g3DR1NfpiHOPi_wFZODt6weD34=/640x358/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4852761/original/003273600_1717497446-IMG-20240604-WA0112.jpg"
                        alt="PSI Resmi Usung Khofifah-Emil Dardak di Pilgub Jatim 2024" class="news-image"
                        onclick="showPopup('PSI Resmi Usung Khofifah-Emil Dardak di Pilgub Jatim 2024', '04 - Juni - 2024', 'Ketum PSI Kaesang Pangarep berharap, Khofifah dan Emil Dardak kelak bisa kembali bersinergi dengan pemerintah pusat di bawah kepemimpinan Prabowo Subianto.')">
                    <p>04 - Juni - 2024</p>
                    <p>Ketum PSI Kaesang Pangarep berharap, Khofifah dan Emil Dardak kelak bisa kembali bersinergi dengan
                        pemerintah pusat di bawah kepemimpinan Prabowo Subianto.</p>
                </li>
                <li>
                    <h3>Tingkatkan Kesadaran Masyarakat Pentingnya Imunisasi Rutin Lengkap</h3>
                    <img src="https://sehatnegeriku.kemkes.go.id/wp-content/uploads/2024/05/53731212800_de3161337c_c-750x534.jpg"
                        alt="Tingkatkan Kesadaran Masyarakat Pentingnya Imunisasi Rutin Lengkap" class="news-image"
                        onclick="showPopup('Tingkatkan Kesadaran Masyarakat Pentingnya Imunisasi Rutin Lengkap', '28 Mei 2024', 'Pada tanggal 20 Mei 2024 memberitakan kesadaran masyarakat terhadap Imunisasi ')">
                    <p>28 - Mei - 2024</p>
                    <p>Kementerian Kesehatan (Kemenkes) menyelenggarakan puncak Pekan Imunisasi Dunia (PID) tahun 2024
                        sebagai bentuk kampanye dan edukasi tentang pentingnya imunisasi rutin lengkap di taman Lapangan
                        Banteng, Jakarta, pada Minggu (19/5). PID 2024 ini mengusung tema “Imunisasi Lengkap, Indonesia
                        Kuat. Selanjutnya, pemerintah juga memberikan penghargaan dan hadiah kepada pemenang kompetisi
                        penggiat
                        media sosial dan kompetisi jurnalis dengan materi dan penulisan terbaik. Pada pekan PID 2024, ada
                        pula peluncuran (launching) sertifikat dan notifikasi imunisasi.</p>
                </li>
                <li>
                    <h3>Wabah Covid-19</h3>
                    <img src="https://tse3.mm.bing.net/th?id=OIF.Epl%2bYf355aZ0c3XDH7NB%2fQ&pid=Api&P=0&h=180"
                        alt="Berita 3" class="news-image"
                        onclick="showPopup('Wabah Covid-19', '20 April 2020', 'Telah terjadi wabah yang membuat kita demam, flu, dan bisa membawa kematian')">
                    <p>20 April 2020</p>
                    <p>Telah terjadi wabah yang membuat kita demam, flu, dan bisa membawa kematian.</p>
                </li>
            </ul>
        </div>
    </div>

    <div id="popup" class="popup">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2 id="popup-title"></h2>
        <p id="popup-date"></p>
        <p id="popup-description"></p>
    </div>

    <script>
        function showPopup(title, date, description) {
            var popup = document.getElementById("popup");
            var popupTitle = document.getElementById("popup-title");
            var popupDate = document.getElementById("popup-date");
            var popupDescription = document.getElementById("popup-description");

            popupTitle.textContent = title;
            popupDate.textContent = date;
            popupDescription.textContent = description;
            popup.style.display = "block";
        }

        function closePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }
    </script>
@endsection