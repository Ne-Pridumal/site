$(Document).ready(function ()
    {
        $('.header-burger').click(function (event)
        {
            $('.header-burger,.header-list').toggleClass('active');
            $('body').toggleClass('lock');
        });

    }
)