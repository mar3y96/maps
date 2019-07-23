@extends('admin.layout.app')
@section('title')
طلبات الدورات
@stop
@section('content')
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{ url('admin/home') }}" >لوحة التحكم</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#"> إعدادات الدورات</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ url('admin/courses/course-registrations') }}">طلبات الدورات</a>
    </li>
</ul>
@include('layouts.alert')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> جدول الطلبات   &nbsp;
                    <a id="dlink"  style="display:none;"></a>

                <a onclick="tableToExcel('sample_1', 'name', 'myfile.xls')" style="color: inherit" > تنزيل الجدول بصيغة Excel </a>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                <tr>
                    <th>
                        اسم البرنامج 
                    </th>
                    <th>
                        صاحب الطلب 
                    </th>
                    <th>
                        الوظيفه
                    </th>
                    <th>
                        الايميل 
                    </th>
                    <td>
                        الهاتف
                    </td>
                    <th>
                        خيارات 
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($applications as $app)
                <tr class="odd gradeX">
                    <td>
                        {{ $app->course->name_ar }}
                    </td>
                    <td>
                        {{ $app->applicant_name }}
                    </td>
                    <td>
                        {{ $app->applicant_job }}
                    </td>
                    <td class="center">
                        {{ $app->applicant_email }}
                    </td>
                    <td>
                        {{ $app->applicant_phone }} 
                    </td>
                    <td>

                        <a class="btn btn-circle green" href="#modal-table{{ $app->id }}" role="button" data-toggle="modal" title="معاينة الطلب"><i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </a>
                        <div id="modal-table{{ $app->id }}" class="modal fade in" tabindex="-1" style="display: none;" aria-hidden="false">
                            <div class="modal-backdrop fade in" style="height: 649px;"></div>
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header no-padding">
                                        <div class="table-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span class="white">×</span>
                                        </button>
                                        <div class="text-center">معاينة الطلب رقم # {{ $app->id }}</div>
                                        </div>
                                    </div>
                                    <div class="modal-body no-padding">
                                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                        <thead>
                                            <tr>
                                                <th class="col-lg-4"></th>
                                                <th class="col-lg-8"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-lg-4">الاسم</td>
                                                <td class="col-lg-8">{{ $app->applicant_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">المؤهل العلمي</td>
                                                <td class="col-lg-8">
                                                        {{ $app->qualification }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">المدينه</td>
                                                <td class="col-lg-8">{{ $app->city }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">الوظيفة</td>
                                                <td class="col-lg-8">{{ $app->applicant_job }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">الشركة</td>
                                                <td class="col-lg-8">{{ $app->company }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">رقم التلفون</td>
                                                <td class="col-lg-8" dir="ltr" align="right">{{ $app->applicant_phone }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">البريد الإلكتروني</td>
                                                <td class="col-lg-8">{{ $app->applicant_email }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4"> كود الخصم</td>
                                                <td class="col-lg-8">{{ $app->discount_code }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">البرنامج المطلوب</td>
                                                <td class="col-lg-8">{{ $app->course->name_ar }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">تاريخ البرنامج </td>
                                                <td class="col-lg-8">{{ $app->course->course_date }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">نوع الكورس</td>
                                                <td class="col-lg-8">{{ $app->attend }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">الملاحظات</td>
                                                <td class="col-lg-8">{{ $app->notes }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-4">تاريخ الطلب</td>
                                                <td class="col-lg-8">{{ $app->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer no-margin-top">
                                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                        <i class="ace-icon fa fa-times"></i>
                                        Close
                                        </button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                        <!-- /.modal-dialog -->
                        </div>
   
                        {{ Form::open(['route'=>['admin.course.registration.destroy',$app->id],'method'=>'delete','style'=>'display:inline'])}}
                        <button class="btn btn-circle alert-danger" onclick="return confirm('متاكد من الحذف');"><i class=" fa fa-trash-o" title="حذف الطلب "></i></button>
                        {{ Form::close() }}
                        
                    </td>
                    
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE HEADER-->


@endsection
@section('script')
      <script>
        var tableToExcel = (function () {
            var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
            return function (table, name, filename) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }

                document.getElementById("dlink").href = uri + base64(format(template, ctx));
                document.getElementById("dlink").download = filename;
                document.getElementById("dlink").click();

            }
        })()
      </script>
@endsection