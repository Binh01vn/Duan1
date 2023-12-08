<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Recent Comments -->
    <div class="row">
        <div class="white-box">
            <h3 class="box-title">Thống kê doanh thu <span id="text-date"></span></h3>
            <div id="myfirstchart" style="height: 250px; width: 100%;"></div>
            <script type="text/javascript">
                $(document).ready(function () {
                    thongkedt();
                    let char = new Morris.Bar({

                        element: 'myfirstchart',

                        xkey: 'date',

                        ykeys: ['date', 'doanhthu'],

                        labels: ['Ngày', 'Doanh thu']
                    });
                    function thongkedt() {
                        let text = "365 ngày qua";
                        $('#text-date').text(text);
                        $.ajax({
                            type: 'POST',
                            // Đường dẫ tới tệp PHP xử lý dữ liệu
                            url: '../admin/thongkedt.php',
                            dataType: "JSON",
                            success: function (data) {
                                char.setData(data);
                                $('#text-date').text(text);
                            }
                        });
                    }
                })
            </script>
        </div>
    </div>
</div>
<!-- End Container fluid  -->