<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="ar" dir=rtl>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>دليل طالبات كلية الحاسب</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">موقع المكتب</h5>
                    <button type="button" class="close mx-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="img-direction" width="100%" />
                </div>
            </div>
        </div>
    </div>



    <section class="header">

        <nav>
            <a href="index.php"><img src="logo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="login.php">تسجيل دخول
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                        </a></li>
                    <li><a href="map.html">الخريطة
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a></li>
                </ul>

            </div>
            <div class="text-box">
                <p>يمكنك البحث والوصول بسهولة لمكاتب اعضاء هيئة التدريس</p>
            </div>

        </nav>

    </section>

    <div class="container min-vh-400 py-4">
        <div class="row justify-content-center">
            <div class="col-md-5 mx-auto">
                <div class="small fw-light" dir=rtl> </div>
                <form method="get">
                    <div class="input-group border rounded-pill">
                        <input class="form-control rounded-pill border-0 m-1" type="text"
                            onkeyup="searchForOffice(this.value)"
                            placeholder=" اسم الموظفة أو رقم المكتب أو رقم الصيانة" name="search" dir=rtl>
                        </input>
                        <span class="my-auto mx-3"> <i class="fa fa-search"></i> </span>
                    </div>
            </div>
            </form>

        </div>
        <table class="table table-container mt-4" id="offices-table">
        </table>
        <nav aria-label="table-nav" class="justify-content-center">
            <ul class="pagination justify-content-center" id="pagination">

            </ul>

        </nav>




    </div>



    <script type="text/javascript">
        var currentPageNum = 1;
        var totalPages = 0;
        var totalItems = 0;
        var serachKey = "";
        function searchForOffice(query) {
            serachKey = query;
            console.log(query);
            getPage(1, 0, query);
        }

        window.onload = function () {
            getPage(1, 0);
        }

        function paginationNavigation() {
            totalPages = Math.ceil(totalItems / 20);

            console.log(totalPages);
            let pages = '<li class="page-item disabled" id="pre-btn"><a class="page-link"  href="#offices-table" id="prev-btn-link">السابق</a></li>'

            for (let i = 1; i <= totalPages; i++) {
                if (i == currentPageNum)
                    pages += '<li class="page-item active" id="page-' + i + '" aria-current="page" ><a class="page-link" onclick="navigateToPage(' + (i) + ')" href="#offices-table">' + i + '</a></li>'
                else
                    pages += '<li class="page-item" id="page-' + i + '"><a class="page-link"  onclick="navigateToPage(' + (i) + ')" href="#offices-table">' + i + '</a></li>'
            }
            if (currentPageNum == totalPages || totalPages == 0)
                pages += '<li class="page-item disabled"  id="next-btn"><a class="page-link" href="#offices-table" id="next-btn-link">التالي</a></li>';
            else
                pages += '<li class="page-item"  id="next-btn"><a class="page-link" href="#offices-table" id="next-btn-link">التالي</a></li>';


            document.getElementById("pagination").innerHTML = pages;
            initListeners();

        }

        function initListeners() {
            document.getElementById("prev-btn-link").addEventListener("click", function () {
                navigateToPage(currentPageNum - 1);
            });
            document.getElementById("next-btn-link").addEventListener("click", function () {
                navigateToPage(currentPageNum + 1);
            });
        }
        function navigateToPage(page) {
            console.log("currentPageNum " + currentPageNum);
            console.log("navigate to page " + page);
            let offset = (page * 20);
            let index = offset - 20;
            setActivePage(page);
            currentPageNum = page;

            if (page > 1)
                activatePrevBtn();

            else
                inactivatePrevBtn();


            if (totalPages == page)
                inactivateNextBtn();
            else
                activateNextBtn();

            getPage(page, index, serachKey);
        }

        function getPage(page, index, search) {
            console.log("search= " + search);
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                const response = JSON.parse(this.responseText);
                totalItems = response.totalItems;
                paginationNavigation();

                renderTable(response.result);
            }
            xhttp.open("GET", "getAllOffices.php?page=" + page + "&index=" + index + "&search=" + search);
            xhttp.send();
        }

        function activatePrevBtn() {
            document.getElementById("pre-btn").classList.remove("disabled");
        }

        function inactivatePrevBtn() {
            document.getElementById("pre-btn").classList.add("disabled");
        }

        function setActivePage(page) {
            document.getElementById("page-" + currentPageNum).classList.remove("active");
            document.getElementById("page-" + page).classList.add("active");
        }

        function activateNextBtn() {
            document.getElementById("next-btn").classList.remove("disabled");
        }

        function inactivateNextBtn() {
            document.getElementById("next-btn").classList.add("disabled");
        }

        function showMap(directionImg) {
            document.getElementById("img-direction").src = 'data:image/png;base64,' + directionImg;
        }

        function renderTable(result) {
            if (result.length != 0) {
                let tableContent = "<thead><tr><th class='text-right'>اسم المكتب</th><th class='text-right'>اسم الموظفة</th><th class='text-right'>رقم الصيانة</th><th class='text-right'>رقم المكتب</th><th>الخريطة</th></tr></theasd>";
                result.forEach(element => {
                    tableContent += "<tbody><tr>" +
                        "<td class='text-right'>" + element.officeName + "</td>" +
                        "<td class='text-right'>" + element.employeeName + "</td>" +
                        "<td class='text-right'>" + element.maintenanceId + "</td>" +
                        "<td class='text-right'>" + element.officeNumber + "</td>" +
                        "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#mapModal' onclick=showMap('" + element.direction + "')>عرض</button></td>" +
                        "</tr></tbody>"
                });
                document.getElementById("offices-table").innerHTML = tableContent;
            }
            else
                document.getElementById("offices-table").innerHTML = '<div class=" text-center  alert alert-secondary" role="alert">لا يوجد نتائج</div>';
        }

    </script>
</body>



</html>