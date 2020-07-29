define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'user/invest/index' + location.search,
                    add_url: 'user/invest/add',
                    edit_url: 'user/invest/edit',
                    del_url: 'user/invest/del',
                    multi_url: 'user/invest/multi',
                    table: 'invest',
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
                        {field: 'pid', title: __('Pid')},
                        {field: 'title', title: __('Title')},
                        {field: 'money', title: __('Money'), operate:'BETWEEN'},
                        {field: 'day', title: __('Day')},
                        {field: 'rate', title: __('Rate'), operate:'BETWEEN'},
                        {field: 'type1', title: __('Type1')},
                        {field: 'type2', title: __('Type2')},
                        {field: 'status', title: __('Status')},
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