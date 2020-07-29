define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'finance/investlist/index' + location.search,
                    add_url: 'finance/investlist/add',
                    edit_url: 'finance/investlist/edit',
                    del_url: 'finance/investlist/del',
                    multi_url: 'finance/investlist/multi',
                    table: 'invest_list',
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
                        {field: 'iid', title: __('Iid')},
                        {field: 'num', title: __('Num')},
                        {field: 'title', title: __('Title')},
                        {field: 'money1', title: __('Money1'), operate:'BETWEEN'},
                        {field: 'money2', title: __('Money2'), operate:'BETWEEN'},
                        {field: 'plantime', title: __('Plantime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'handletime', title: __('Handletime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'pay1', title: __('Pay1'), operate:'BETWEEN'},
                        {field: 'pay2', title: __('Pay2'), operate:'BETWEEN'},
                        {field: 'status', title: __('Status')},
                        {
                            field: 'operate', title: __('Operate'), table: table, buttons: [
                                { name: 'agree', refresh: true, url: 'finance/recharge/doRecharge', text: '同意', title: '确认', confirm: '确认充值该订单吗？', icon: 'fa fa-check', classname: 'btn btn-success btn-ajax', hidden: function (row) { return row.status == 1 } },
                                { name: 'reject', refresh: true, url: 'finance/recharge/doRecharge', text: '同意', title: '确认', confirm: '确认充值该订单吗？', icon: 'fa fa-check', classname: 'btn btn-success btn-ajax', hidden: function (row) { return row.status == 1 } }
                            ], events: Table.api.events.operate, formatter: Table.api.formatter.buttons
                        }
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