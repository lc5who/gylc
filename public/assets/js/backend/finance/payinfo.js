define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'finance/payinfo/index' + location.search,
                    add_url: 'finance/payinfo/add',
                    edit_url: 'finance/payinfo/edit',
                    del_url: 'finance/payinfo/del',
                    multi_url: 'finance/payinfo/multi',
                    table: 'payinfo',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'category_id', title: __('Category_id')},
                        {field: 'payee', title: __('Payee')},
                        {field: 'bankname', title: __('Bankname')},
                        {field: 'bankcard', title: __('Bankcard')},
                        {field: 'bankaddress', title: __('Bankaddress')},
                        {field: 'alipayimage', title: __('Alipayimage'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'wxpayimage', title: __('Wxpayimage'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'switch', title: __('Switch'), table: table, formatter: Table.api.formatter.toggle},
                        {field: 'weigh', title: __('Weigh')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
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