<!-- BEGIN: main -->
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <colgroup>
            <col class="w100">
            <col span="1">
            <col span="2" class="w150">
        </colgroup>
        <thead>
            <tr class="text-center">
                <th class="text-nowrap">id</th>
                <th class="text-nowrap">Name</th>
                <th class="text-nowrap">Birthday</th>
                <th class="text-nowrap">Dia chi</th>
            </tr>
        </thead>
        <tbody>
        <!-- BEGIN: loop -->

            <tr class="text-center">
                <td class="text-nowrap">{DATA.id}</td>
                <td class="text-nowrap">{DATA.name}</td>
                <td class="text-nowrap">{DATA.birthday}</td>
                <td class="text-nowrap">{DATA.address}</td>
                <td class="text-nowrap">
                    <a href="{DATA.url_edit}" class="btn btn-default btn-sm"><i class="fa fa-edit"></i> {GLANG.edit}</a>
                    <a href="javascript:void(0);" onclick="nv_module_del({DATA.id}, '{ROW.checkss}');" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> {GLANG.delete}</a>
                </td>

            </tr>
        <!-- END: loop -->

        </tbody>
    </table>
</div>
<!-- END: main -->
