<!-- footer -->
<footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                href="https://www.wrappixel.com/">wrappixel.com</a>
</footer>
<!-- End footer -->
</div>
<!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="view/plugins/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="view/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="view/js/app-style-switcher.js"></script>
<script src="view/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>

<!--Wave Effects -->
<script src="view/js/waves.js"></script>

<!--Menu sidebar -->
<script src="view/js/sidebarmenu.js"></script>

<!--Custom JavaScript -->
<script src="view/js/custom.js"></script>

<!--This page JavaScript -->
<!--chartis chart-->
<script src="view/plugins/bower_components/chartist/dist/chartist.min.js"></script>
<script src="view/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="view/js/pages/dashboards/dashboard1.js"></script>

<!-- Biểu đồ morris -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
        new Morris.Area({
                // ID of the element in which to draw the chart.
                element: 'myfirstchart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                // data: [
                //         { year: '2023-11-19', donhang: 20, doanhthu: 1235000, tongsl: 210},
                //         { year: '2023-11-28', donhang: 33, doanhthu: 2235000, tongsl: 210},
                //         { year: '2023-12-1', donhang: 12, doanhthu: 3735000, tongsl: 210},
                //         { year: '2024-1-21', donhang: 18, doanhthu: 1215000, tongsl: 210},
                //         { year: '2024-3-9', donhang: 26, doanhthu: 3235000, tongsl: 123}
                // ],
                // The name of the data record attribute that contains x-values.
                xkey: 'year',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['donhang', 'doanhthu', 'tongsl'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Đơn hàng', 'Doanh thu', 'Số lượng đã bán']
        });
</script>
</body>

</html>