<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
   <script type="text/javascript">
      function openTable()
      {
         app.openBXTable({
            url: "/mobileshopapp/list.php",
            TABLE_SETTINGS: {
               alphabet_index: false, // Выключим алфавитный индекс
               showtitle: true, //Покажем тайтл
               cache: false,// не кэшируем 
               name: "Разделы", //
               callback: function (data)
               {
                  alert(JSON.stringify(data));
               }
            }
         });
      }

      //добавить кнопку
      app.addButtons(
         { 
            menuButton:  
               {
               type: 'plus',
               style: 'custom',
               callback: function ()
               {
                app.menuShow();
               //app.openNewPage("/myfirst_app/test2.php");
               }
            } 
            } 
         );

      //добавить меню
      app.menuCreate({
         items: [
            {
               name: "Открыть страницу",
               action: function ()
               {
                  //   alert("Hello");
                  app.openNewPage("/mobileshopapp/test2.php");
               }
            },
            {
               name: "bitrix",
               url: "http://bitrix.ru",
               icon: 'settings'
            }
         ]
      });

      //title
      app.setPageTitle({
         title: "MyFirstApp"
      });
      

      //pull-down-to-refresh
      app.pullDown({
         enable: true,
         callback: function ()
         {
            document.location.reload();
         },
         downtext: "Тяни...",
         pulltext: "Отпускай...",
         loadtext: "Жди..."
      });


   </script>

   <button style="width:100%;height:50px" onclick="openTable();">Table</button>  
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?> 
