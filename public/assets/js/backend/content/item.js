define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'content/item/index' + location.search,
                    add_url: 'content/item/add',
                    edit_url: 'content/item/edit',
                    del_url: 'content/item/del',
                    multi_url: 'content/item/multi',
                    table: 'item',
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
                        {field: 'title', title: __('Title')},
                        {field: 'desc', title: __('Desc')},
                        {field: 'avaimage', title: __('Avaimage'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'total', title: __('Total'), operate:'BETWEEN'},
                        {field: 'rate', title: __('Rate'), operate:'BETWEEN'},
                        {field: 'percent', title: __('Percent'), operate:'BETWEEN'},
                        {field: 'day', title: __('Day')},
                        {field: 'min', title: __('Min'), operate:'BETWEEN'},
                        {field: 'max', title: __('Max'), operate:'BETWEEN'},
                        {field: 'num', title: __('Num')},
                        {field: 'guarantee', title: __('Guarantee')},
                        {field: 'limit', title: __('Limit')},
                        {field: 'starttime', title: __('Starttime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'sort', title: __('Sort')},
                        {field: 'frbl', title: __('Frbl'), operate:'BETWEEN'},
                        {field: 'red', title: __('Red'), operate:'BETWEEN'},
                        {field: 'typedata', title: __('Typedata'), searchList: {"每日返息 到期还本":__('每日返息 到期还本'),"每周返息 到期还本":__('每周返息 到期还本'),"每月返息 到期还本":__('每月返息 到期还本'),"每日复利 保本保息":__('每日复利 保本保息'),"到期还本还息":__('到期还本还息'),"每小时返息 到期还本":__('每小时返息 到期还本')}, formatter: Table.api.formatter.normal},
                        {field: 'zsgs', title: __('Zsgs'), operate:'BETWEEN'},
                        {field: 'zsczz', title: __('Zsczz'), operate:'BETWEEN'},
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