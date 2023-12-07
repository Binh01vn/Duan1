<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Recent Comments -->
    <div class="row">
        <div class="white-box">
            <h3 class="box-title">Thống kê doanh thu <span id="text-date"></span></h3>
            <select name="sltk" class="slts">
                <option value="7">7 ngày</option>
                <option value="28">28 ngày</option>
                <option value="90">90 ngày</option>
                <option value="365">365 ngày</option>
            </select>
            <div id="myfirstchart" style="height: 250px; width: 100%;"></div>
            <script type="text/javascript">
                $(document).ready(function () {
                    thongkedt();
                    let char = new Morris.Area({

                        element: 'myfirstchart',

                        // data: [
                        //     { date: '2008', doanhthu: 100000 },
                        //     { date: '2009', doanhthu: 210000 },
                        //     { date: '2015', doanhthu: 110000 },
                        //     { date: '2019', doanhthu: 310000 },
                        //     { date: '2023', doanhthu: 437000 }
                        // ],

                        xkey: 'date',

                        ykeys: ['date', 'slb', 'doanhthu'],

                        labels: ['Ngày', 'Số lượng', 'Doanh thu']
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