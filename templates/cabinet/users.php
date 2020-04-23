<script src="/js/cabinet/users.js"></script>
<form action="/cabinet/users" method="post">


    <div class="flex-row" style="justify-content: space-between; margin-bottom: 15px">
        <div>
<!--            <select name="usersPerPage" onchange="this.form.submit()">-->
            <select id="js-amount-per-page">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
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

    <div class="navigation" id="js-navigation">
<!--        <label value="1" class="edge">1</label>-->
<!--        <label value="3">2</label>-->
<!--        <label value="1">3</label>-->
<!--        <label value="3">4</label>-->
<!--        <label value="1">5</label>-->
<!--        <label value="1">6</label>-->
<!--        <label value="3" class="selected">7</label>-->
<!--        <label value="1">8</label>-->
<!--        <label value="3">9</label>-->
<!--        <label value="1">10</label>-->
<!--        <label value="1">11</label>-->
<!--        <label value="1">12</label>-->
<!--        <label value="1">13</label>-->
<!--        <label value="1" class="edge">14</label>-->

<!--        <a href="?page=1">1</a>-->
<!--        <a href="?page=2" class="selected">2</a>-->
<!--        <a href="?page=3">3</a>-->
    </div>


</form>