
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>DataTables example - Mobile support (Responsive integration)</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=11229a4cc52ab488c3d6ed72e1ec231e1">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" src="/media/js/site.js?_=87a9e5380bcd291d5eea77cf210da433" data-domain="datatables.net" data-api="https://plausible.sprymedia.co.uk/api/event"></script>
	<script src="https://media.ethicalads.io/media/client/ethicalads.min.js"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Frowreorder%2Fexamples%2Finitialisation%2Fresponsive.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
	<script type="text/javascript" class="init">
	


$(document).ready(function() {
	var table = $('#example').DataTable( {
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	} );
} );



	</script>
</head>
<body class="wide comments example">
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	<div class="fw-container">
		<div class="fw-body">
			<div class="content">
				<h1 class="page_title">Bảng hàng Sen Vàng</h1>
				<div class="demo-html">
					<table id="example" class="display nowrap" style="width:100%">
						<thead>
							<tr>
								<th>Số thứ tự</th>
								<th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
								<th>Vị trí</th>
                                <th>Diện tích</th>
                                <th>Hướng</th>
								<th>Ngày lên hàng</th>
                                <th>Sale đào</th>
                                <th>Hoa hồng</th>
								<th>Giá/lô</th>
                                <th>Giá/m2</th>
                                <th>Hình ảnh</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2</td>
								<td>Belhomes T2-04-9</td>
								<td>Dự án đô thị</td>
								<td>Belhomes</td>
                                <td>75 m2</td>
                                <td>Tây bắc</td>
								<td>7-10-2022</td>
                                <td>Nguyễn Đoan</td>
                                <td>50.000.000 VNĐ</td>
								<td>4.000.000.000 VNĐ</td>
                                <td>56.250.000 VNĐ</td>
                                <td><img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600"></td>
							</tr>
						</tbody>
						<!-- <tfoot>
							<tr>
                                <th>Số thứ tự</th>
								<th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
								<th>Vị trí</th>
								<th>Ngày lên hàng</th>
								<th>Giá/lô</th>
                                <th>Giá/m2</th>
							</tr>
						</tfoot> -->
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>