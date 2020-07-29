define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            $(document).on('click', '.btn-ignore', function () {
                $.ajax({
                    url: "finance/cash/ignoreall",
                    type: 'get',
                    // dataType:'json',
                    // data:'',
                    success: function (res) {
                        console.log(res)
                        if (res.code == 1) {
                            $('#table').bootstrapTable('refresh', {});
                        }
                    }
                })
            });
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'finance/cash/index' + location.search,
                    add_url: 'finance/cash/add',
                    edit_url: 'finance/cash/edit',
                    del_url: 'finance/cash/del',
                    multi_url: 'finance/cash/multi',
                    table: 'cash',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'uid', title: __('Uid')},
                        {field: 'name', title: __('Name')},
                        {field: 'bid', title: __('Bid')},
                        {field: 'bank', title: __('Bank')},
                        {field: 'account', title: __('Account')},
                        {field: 'money', title: __('Money'), operate:'BETWEEN'},
                        { field: 'status', title: __('Status'), searchList: { "0": __('Status 0'), "1": __('Status 1'), "2": __('Status 2')}, formatter: Table.api.formatter.status},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'handletime', title: __('Handletime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'warn', title: __('Warn')},
                        {
                            field: 'operate', title: __('Operate'), table: table, buttons: [
                                { name: 'agree', refresh: true, url: 'finance/cash/doCash', text: '同意', title: '确认', confirm: '确认充值该订单吗？', icon: 'fa fa-check', classname: 'btn btn-success btn-ajax', hidden: function (row) { return row.status == 1 || row.status == 2} },
                                { name: 'reject', refresh: true, url: 'finance/cash/rejectCash', text: '拒绝', title: '拒绝', confirm: '确认拒绝该订单吗？', icon: 'fa fa-trash', classname: 'btn btn-danger btn-ajax', hidden: function (row) { return row.status == 1 || row.status == 2} }

                            ], events: Table.api.events.operate, formatter: Table.api.formatter.buttons
                        }
                        // {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});