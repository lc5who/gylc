define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            $(document).on('click', '.btn-ignore', function () {
                $.ajax({
                    url:"finance/recharge/ignoreall",
                    type:'get',
                    // dataType:'json',
                    // data:'',
                    success:function(res){
                        console.log(res)
                        if(res.code==1){
                            $('#table').bootstrapTable('refresh',{});
                        }
                    }
                })
            });
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'finance/recharge/index' + location.search,
                    add_url: 'finance/recharge/add',
                    edit_url: 'finance/recharge/edit',
                    del_url: 'finance/recharge/del',
                    multi_url: 'finance/recharge/multi',
                    table: 'recharge',
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
                        {field: 'user_id', title: __('User_id')},
                        {field: 'user.username', title: __('User.username')},
                        {field: 'money', title: __('Money'), operate:'BETWEEN'},
                        {field: 'type', title: __('Type')},
                        {field: 'orderid', title: __('Orderid')},
                        {field: 'status', title: __('Status'), searchList: {"0":__('Status 0'),"1":__('Status 1')}, formatter: Table.api.formatter.status},
                        {field: 'warn', title: __('Warn')},
                        {field: 'reason', title: __('Reason')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'handletime', title: __('Handletime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table,buttons:[
                                {name:'agree',refresh:true,url:'finance/recharge/doRecharge',text:'同意',title:'确认',confirm:'确认充值该订单吗？',icon:'fa fa-check',classname:'btn btn-success btn-ajax',hidden:function (row) {return row.status==1}}
                            ], events: Table.api.events.operate, formatter: Table.api.formatter.buttons}
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