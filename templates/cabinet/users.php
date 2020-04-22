<script src="/js/cabinet/users.js"></script>
<form action="/cabinet/users" method="post">


    <div class="flex-row" style="justify-content: space-between; margin-bottom: 15px">
        <div>
<!--            <select name="usersPerPage" onchange="this.form.submit()">-->
            <select id="js-amount-per-page">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <label>На странице</label>
        </div>
        <input type="text" placeholder="Поиск">
    </div>

    <div class="cabinet_users_table" id="js-users-table">
<!--        JS Insert table-->
    </div>

    <div class="navigation">
<!--        <a href="?page=1">1</a>-->
<!--        <a href="?page=2" class="selected">2</a>-->
<!--        <a href="?page=3">3</a>-->
    </div>


</form>