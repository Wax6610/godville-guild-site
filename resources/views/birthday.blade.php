<!DOCTYPE html>
<!-- saved from url=(0025)https://godville.net/news -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Газета Годвилля </title>
    <meta content="width=device-width; initial-scale=1.0;" name="viewport">


    <script src="{{ asset('birthday/jquery-1.12.4.min.js') }}" defer></script>

    <link href="{{ asset('birthday/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('birthday/news.css') }}" rel="stylesheet">

    <link href="{{ asset('birthday/menubar.css') }}" rel="stylesheet">


    <meta name="gvdt" content="news_n.iphone">


    <link rel="shortcut icon" href="https://godville.net/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://godville.net/images/favicon.ico" type="image/x-icon">


    <meta name="keywords"
          content="Годвилль, Godville, Zero Player Game, ZPG, ZRPG, самоиграйка, тамагочи, браузерная игра, божественная комедия">
    <meta name="description"
          content="Божественная комедия-самоиграйка с участием бога и, кхм, героя. А еще MMO и ZPG, если вы знаете эти слова.">

    <script src="{{ asset('birthday/jquery.jrumble.1.3.min') }}" defer></script>


    <meta http-equiv="Content-Security-Policy" content="script-src https: &#39;unsafe-eval&#39;;">
</head>
<body>

<div id="menu_bar">
    <ul>

        <li class="menu_item" id="menu_top" style=""><b>Приветствуем, о Kuroi-neko!</b></li>

        <span style="display:none" id="new_msg" title="Обновите блок переписки, чтобы этот символ исчез.">✉</span>

        <li>газета</li>
        |


        <li id="m_hero">
            <a href="https://godville.net/superhero">герой</a><span
                    style="font-family: verdana,arial,helvetica,code2000,sans-serif,segoe UI Symbol;"></span>

            |
        </li>

        <li><a href="https://godville.net/ideabox">ящик</a></li>
        |

        <li><a href="https://godville.net/user/profile">профиль</a></li>
        |
        <li><a href="https://godville.net/pantheon">пантеоны</a></li>
        |
        <li><a href="https://godville.net/forums">форумы</a></li>
        |

        <li><a href="https://godville.net/blog">блог</a></li>
        |

        <li><a href="https://wiki.godville.net/" target="_blank">энциклобогия</a></li>
        |

        <li style="">
            <a href="https://godville.net/help">помощь</a></li>
        |
        <li>
            <a href="https://godville.net/blog/logout" id="logout">выход</a>

        </li>
    </ul>

</div>
<div id="index_main">

    <div id="header" class="container ">
        <div class="wrapper">

            <div id="headline" class="clearfix">
                <div id="issue">№ 3553</div>

                <h1 id="name_1">ГОДВИЛЛЬ</h1>
                <div id="logo"><span id="logo_img"></span></div>
                <h1 id="name_2">СЕГОДНЯ</h1>
                <div id="date">&nbsp;<span>4161</span> день&nbsp;г.&nbsp;э.</div>

            </div>

            <div id="headline_row">
			<span>
				•

				  Прямо в мозг •

				  По образу и подобию •

				  Время рождает героев •

			</span>
            </div>
        </div>
    </div>

    <div id="content" class="container clearfix">
        <div class="wrapper">
            <div class="columns ">
                <div class="wide_column">
                    <div class="article clearfix">
                        <h2>Первая полоса</h2>

                        <h3>
                            <a href="http://wiki.godville.net/%D0%A4%D1%80%D0%B8%D0%BB%D0%B0%D0%BD%D1%81%D0%B5%D0%BB%D0%BE%D1%82">Фриланселот</a>
                        </h3>
                        <p> Фриланселот — наёмный специалист по благородной охоте на героев. Известен непробиваемой
                            принципиальностью: охотится только на тех героев, которые виновны в серьёзных преступлениях
                            против человечности.</p>

                    </div>

                    <div class="game clearfix" id="bingo">
                        <h2>Трофейное бинго</h2>

                        <div id="bgn_t">

                            <table id="bgn">

                                <tbody>
                                <tr>

                                    <td><span class="bgnk">рни</span></td>

                                    <td><span>нев</span></td>

                                    <td><span>стро</span></td>

                                    <td><span class="bgnk">вор</span></td>

                                    <td><span>рот</span></td>

                                </tr>

                                <tr>

                                    <td><span>учеб</span></td>

                                    <td><span>иков</span></td>

                                    <td><span>бни</span></td>

                                    <td><span>очек</span></td>

                                    <td><span>вер</span></td>

                                </tr>

                                <tr>

                                    <td><span>ания</span></td>

                                    <td><span>чек</span></td>

                                    <td><span>ект</span></td>

                                    <td><span>тре</span></td>

                                    <td><span>рат</span></td>

                                </tr>

                                </tbody>
                            </table>

                        </div>

                        <p id="b_inv"></p>
                        <p class="bgn_b">
                            <input id="bgn_show" name="commit" type="submit" value="Проверить инвентарь">
                            <input disabled="disabled" id="bgn_use" name="commit" type="submit"
                                   value="Заполнить ячейки">
                            <input id="bgn_end" name="commit" style="" type="submit" value="Всё, хорош">
                        </p>

                        <p>Очков: <span id="b_score">4</span> <span id="b_nscore"></span></p>
                        <p id="l_clicks" style="">Осталось нажатий: <span id="b_cnt">2</span></p>
                        <p id="l_rank" style="display:none;">На сегодня все, спасибо! На данный момент по очкам вы <span
                                    id="cnt_rank"></span>-й.</p>

                        <p><a href="https://godville.net/news" id="bgn_toggle">Вчерашние результаты</a></p>
                        <p id="bgnr" style="display:none;">

                            <span>1.&nbsp;<a href="https://godville.net/gods/Neferdum">Neferdum</a>&nbsp;(70)</span>

                            <span>2.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A8%D0%BC%D0%B0%D0%B9%D1%81%D0%B5%D1%80">Шмайсер</a>&nbsp;(62)</span>

                            <span>3.&nbsp;<a
                                        href="https://godville.net/gods/%D0%98%D1%81%D1%87%D0%B5%D0%B7%D0%BD%D1%83%D0%B2%D1%88%D0%B8%D0%B9">Исчезнувший</a>&nbsp;(60)</span>

                            <span>4.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9D%D0%B5%D1%80%D0%B0%D0%B7%D0%B8%D0%BC">Неразим</a>&nbsp;(59)</span>

                            <span>5.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D1%8F%D1%83%D1%80%D0%B8%D0%BA%D0%B0">Мяурика</a>&nbsp;(59)</span>

                            <span>6.&nbsp;<a
                                        href="https://godville.net/gods/M%20Form%20II">M Form II</a>&nbsp;(59)</span>

                            <span>7.&nbsp;<a href="https://godville.net/gods/Danaur">Danaur</a>&nbsp;(59)</span>

                            <span>8.&nbsp;<a href="https://godville.net/gods/VasilSha">VasilSha</a>&nbsp;(59)</span>

                            <span>9.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A1%D0%B0%D0%B9%D1%8F%D0%B4%D0%B4%D0%B8%D0%BD%D0%B0">Сайяддина</a>&nbsp;(58)</span>

                            <span>10.&nbsp;<a
                                        href="https://godville.net/gods/%D0%AD%D0%BE%D0%BB%20%D0%B8%D0%B7%20%D0%A2%D1%8C%D0%BC%D1%8B">Эол из Тьмы</a>&nbsp;(58)</span>

                            <span>11.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D1%83%D0%B7%D0%B0%D1%87%D0%BA%D0%B0">Музачка</a>&nbsp;(58)</span>

                            <span>12.&nbsp;<a
                                        href="https://godville.net/gods/%D0%90%D0%BC%D0%B0%D1%82%D1%83%D1%80-%D0%B1%D0%B0%D0%B1%D0%B0%D0%B9">Аматур-бабай</a>&nbsp;(58)</span>

                            <span>13.&nbsp;<a href="https://godville.net/gods/Mleha">Mleha</a>&nbsp;(58)</span>

                            <span>14.&nbsp;<a href="https://godville.net/gods/Mchell">Mchell</a>&nbsp;(58)</span>

                            <span>15.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A7%D0%B8%D0%BF%D1%81%D0%BE%D0%B8%D0%B4">Чипсоид</a>&nbsp;(58)</span>

                            <span>16.&nbsp;<a
                                        href="https://godville.net/gods/Andrick20101">Andrick20101</a>&nbsp;(41)</span>

                            <span>17.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9A%D0%B0%D1%80%D1%85%D1%83%D1%8E%D0%BC%D0%B0%D0%BB%D0%B0">Кархуюмала</a>&nbsp;(41)</span>

                            <span>18.&nbsp;<a href="https://godville.net/gods/Ewydance">Ewydance</a>&nbsp;(40)</span>

                            <span>19.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D1%83%D0%B4%D1%80%D1%8B%D0%B9%20%D0%A2%D0%BE%D1%80%D1%80">Мудрый Торр</a>&nbsp;(40)</span>

                            <span>20.&nbsp;<a href="https://godville.net/gods/%D0%94%D0%B5%D1%81%D1%81">Десс</a>&nbsp;(39)</span>

                            <span>21.&nbsp;<a href="https://godville.net/gods/Karitel">Karitel</a>&nbsp;(39)</span>

                            <span>22.&nbsp;<a href="https://godville.net/gods/GANDJUBAS">GANDJUBAS</a>&nbsp;(39)</span>

                            <span>23.&nbsp;<a href="https://godville.net/gods/Lucky%20me">Lucky me</a>&nbsp;(38)</span>

                            <span>24.&nbsp;<a href="https://godville.net/gods/Adeliz">Adeliz</a>&nbsp;(38)</span>

                            <span>25.&nbsp;<a
                                        href="https://godville.net/gods/Pointofview">Pointofview</a>&nbsp;(38)</span>

                            <span>26.&nbsp;<a
                                        href="https://godville.net/gods/%D0%91%D0%B5%D0%BB%D1%8B%D0%B9%20%D0%9B%D0%B8%D1%81%D0%B5%D0%BD%D0%BE%D0%BA">Белый Лисенок</a>&nbsp;(38)</span>

                            <span>27.&nbsp;<a
                                        href="https://godville.net/gods/%D0%94%D0%B5%D0%B2%D0%B8%D0%B0%D0%BD%D1%82%D0%BD%D1%8B%D0%B9%20%D0%9A%D1%83%D0%BA%D0%BB%D0%B0%D1%87%D0%BE%D0%B2">Девиантный Куклачов</a>&nbsp;(38)</span>

                            <span>28.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D0%B5%D1%80%D1%82%D0%B2%D1%8B%D0%B9%20%D0%90%D0%BD%D0%B0%D1%80%D1%85%D0%B8%D1%81%D1%82">Мертвый Анархист</a>&nbsp;(38)</span>

                            <span>29.&nbsp;<a href="https://godville.net/gods/Phantor">Phantor</a>&nbsp;(38)</span>

                            <span>30.&nbsp;<a href="https://godville.net/gods/Jurido">Jurido</a>&nbsp;(38)</span>

                            <span>31.&nbsp;<a href="https://godville.net/gods/Genatsval">Genatsval</a>&nbsp;(38)</span>

                            <span>32.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A1%D1%83%D0%B2%D0%BE%D1%80%D1%80%D1%80">Суворрр</a>&nbsp;(38)</span>

                            <span>33.&nbsp;<a href="https://godville.net/gods/Yasik">Yasik</a>&nbsp;(38)</span>

                            <span>34.&nbsp;<a href="https://godville.net/gods/Lokixx">Lokixx</a>&nbsp;(37)</span>

                            <span>35.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D0%B0%D1%81%D1%82%D0%B5%D1%80%20%D0%98%D0%BB%D0%BB%D1%8E%D0%B7%D0%B8%D0%B9">Мастер Иллюзий</a>&nbsp;(37)</span>

                            <span>36.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A0%D0%B0%D0%BF%D0%B8%20%D0%91%D0%B5%D0%B7%D1%83%D0%BC%D0%BD%D0%B0%D1%8F">Рапи Безумная</a>&nbsp;(37)</span>

                            <span>37.&nbsp;<a href="https://godville.net/gods/Redkiyvid">Redkiyvid</a>&nbsp;(37)</span>

                            <span>38.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A1%D1%83%D0%B8%D1%81%D0%B5%D0%B8%D1%81%D0%B5%D0%BA%D0%B8">Суисеисеки</a>&nbsp;(37)</span>

                            <span>39.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9D%D0%B0%D0%A1%D0%B0%D0%BC%D0%BE%D0%BC%D0%94%D0%B5%D0%BB%D0%B5%D0%91%D0%BE%D0%B3%D0%B0%D0%9D%D0%B5%D1%82">НаСамомДелеБогаНет</a>&nbsp;(37)</span>

                            <span>40.&nbsp;<a href="https://godville.net/gods/%D0%A2%D0%B5%D1%81%D0%B8%D0%B4%D0%B0">Тесида</a>&nbsp;(37)</span>

                            <span>41.&nbsp;<a href="https://godville.net/gods/%D0%A1%D0%B8%D0%B2%D0%BE%D1%80%D0%B0">Сивора</a>&nbsp;(37)</span>

                            <span>42.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9A%D0%B2%D0%B0%D0%BA%D1%83%D1%88%D0%B0">Квакуша</a>&nbsp;(37)</span>

                            <span>43.&nbsp;<a
                                        href="https://godville.net/gods/Tigr205091">Tigr205091</a>&nbsp;(37)</span>

                            <span>44.&nbsp;<a
                                        href="https://godville.net/gods/%D0%98%D0%BD%D0%B3%D0%BB%D0%B8%D1%88%20%D1%84%D0%B0%D0%B7%D0%B0">Инглиш фаза</a>&nbsp;(37)</span>

                            <span>45.&nbsp;<a href="https://godville.net/gods/%D0%9C%D0%B0%D0%BD%D1%82%D1%80%D0%B0">Мантра</a>&nbsp;(37)</span>

                            <span>46.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9D%D0%BE%D1%87%D0%BD%D0%BE%D0%B9%20%D0%96%D0%B0%D1%80%D0%BE%D0%B2%D0%BE%D0%BD%D0%BE%D0%BA">Ночной Жаровонок</a>&nbsp;(37)</span>

                            <span>47.&nbsp;<a href="https://godville.net/gods/Malkis">Malkis</a>&nbsp;(37)</span>

                            <span>48.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A4%D0%B0%D0%BC%D0%B0%D0%B3%D1%83%D1%81%D1%82%D0%B0">Фамагуста</a>&nbsp;(37)</span>

                            <span>49.&nbsp;<a href="https://godville.net/gods/Amay">Amay</a>&nbsp;(36)</span>

                            <span>50.&nbsp;<a href="https://godville.net/gods/%D0%90%D0%BB%D1%82%D0%B0%D0%B8%D1%87">Алтаич</a>&nbsp;(36)</span>

                            <span>51.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%BE%20%D0%A5%D0%B0%D0%BE%D1%81%D0%B8%D1%82">Просто Хаосит</a>&nbsp;(36)</span>

                            <span>52.&nbsp;<a href="https://godville.net/gods/Laridan">Laridan</a>&nbsp;(36)</span>

                            <span>53.&nbsp;<a href="https://godville.net/gods/KleoO">KleoO</a>&nbsp;(36)</span>

                            <span>54.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A3%D0%B7%D1%83%D0%BA%D0%B0%D0%B3%D0%B5-%D1%81%D0%B0%D0%BC%D0%B0">Узукаге-сама</a>&nbsp;(36)</span>

                            <span>55.&nbsp;<a
                                        href="https://godville.net/gods/June%20Garro">June Garro</a>&nbsp;(36)</span>

                            <span>56.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9F%D1%81%D0%B8%D1%85%D0%B8%D0%B0%D1%82%D1%80">Психиатр</a>&nbsp;(36)</span>

                            <span>57.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9E%20%D0%98%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B5%D0%B9%D1%88%D0%B8%D0%B9">О Исключительнейший</a>&nbsp;(36)</span>

                            <span>58.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A2%D1%8D%D0%BD%D1%81%D1%82%D0%B0%D0%B9%D0%BB%D1%83">Тэнстайлу</a>&nbsp;(36)</span>

                            <span>59.&nbsp;<a href="https://godville.net/gods/Nfox">Nfox</a>&nbsp;(36)</span>

                            <span>60.&nbsp;<a href="https://godville.net/gods/Master65">Master65</a>&nbsp;(36)</span>

                            <span>61.&nbsp;<a href="https://godville.net/gods/Liera%20Chiaroscuro">Liera Chiaroscuro</a>&nbsp;(36)</span>

                            <span>62.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9F%D0%B0%D0%BF%D0%B0%D0%BF%D1%83%D0%B3%D0%BE%D0%B2%D0%BA%D0%B8%D0%BD">Папапуговкин</a>&nbsp;(36)</span>

                            <span>63.&nbsp;<a href="https://godville.net/gods/Alx7">Alx7</a>&nbsp;(36)</span>

                            <span>64.&nbsp;<a href="https://godville.net/gods/%D0%9C%D0%B8%D1%80%D0%B0%D0%BC%D0%BE">Мирамо</a>&nbsp;(36)</span>

                            <span>65.&nbsp;<a
                                        href="https://godville.net/gods/Tequillans">Tequillans</a>&nbsp;(36)</span>

                            <span>66.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9B%D0%B0%20%D0%93%D0%BE%D1%80%D1%80%D0%B0">Ла Горра</a>&nbsp;(36)</span>

                            <span>67.&nbsp;<a href="https://godville.net/gods/%D0%AD%D0%BB%D0%BB%D0%BE%D0%BA">Эллок</a>&nbsp;(36)</span>

                            <span>68.&nbsp;<a
                                        href="https://godville.net/gods/%D0%AD%D0%BB%D1%8C%D0%BD%D0%B0%D1%80%D0%B8">Эльнари</a>&nbsp;(36)</span>

                            <span>69.&nbsp;<a href="https://godville.net/gods/Ultrazoid">Ultrazoid</a>&nbsp;(32)</span>

                            <span>70.&nbsp;<a href="https://godville.net/gods/%D0%9A%D0%BE%D0%B0%D0%BB%D0%B0">Коала</a>&nbsp;(32)</span>

                            <span>71.&nbsp;<a
                                        href="https://godville.net/gods/Sonyasonya">Sonyasonya</a>&nbsp;(32)</span>

                            <span>72.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9A%D1%80%D0%B8%D1%81%D1%82%D0%BE%D1%84%D0%B5%D1%80%20%D0%9C%D0%B0%D0%B9%D0%BB%D0%B7">Кристофер Майлз</a>&nbsp;(32)</span>

                            <span>73.&nbsp;<a href="https://godville.net/gods/Avrolik">Avrolik</a>&nbsp;(32)</span>

                            <span>74.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9B%D0%B8%D0%B1%D0%BB%D0%B8%D1%80%D0%B8%D1%8F">Либлирия</a>&nbsp;(32)</span>

                            <span>75.&nbsp;<a href="https://godville.net/gods/Suok">Suok</a>&nbsp;(32)</span>

                            <span>76.&nbsp;<a href="https://godville.net/gods/AveTria">AveTria</a>&nbsp;(32)</span>

                            <span>77.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D0%B5%D0%B4%D0%B2%D0%B5%D0%B4%D0%B5%D0%B1%D0%BE%D0%B3">Медведебог</a>&nbsp;(32)</span>

                            <span>78.&nbsp;<a href="https://godville.net/gods/Holy%20Suigintou">Holy Suigintou</a>&nbsp;(31)</span>

                            <span>79.&nbsp;<a
                                        href="https://godville.net/gods/%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%B8%D0%B9%20%D0%9E%D0%BE%D0%BE">Великий Ооо</a>&nbsp;(31)</span>

                            <span>80.&nbsp;<a
                                        href="https://godville.net/gods/%D0%97%D0%B5%D0%BB%D0%B5%D0%BD%D0%BA%D0%B0%20%D0%9F%D1%83%D1%81%D1%82%D0%BE%D1%82%D1%8B">Зеленка Пустоты</a>&nbsp;(31)</span>

                            <span>81.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9A%D0%BE%D0%B2%D0%B0%D1%80%D0%BD%D0%B0%D1%8F%20%D0%9C%D0%B5%D0%B4%D1%8C">Коварная Медь</a>&nbsp;(31)</span>

                            <span>82.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A1%D0%B2%D1%8F%D1%82%D0%B0%D1%8F%20%D0%93%D0%B8%D0%B4%D1%80%D0%BE%D0%BF%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0">Святая Гидропоника</a>&nbsp;(31)</span>

                            <span>83.&nbsp;<a
                                        href="https://godville.net/gods/%D0%A5%D0%B8%D0%BA%D0%B0%D1%80%D0%B8%20%D0%AD%D0%B9%D1%82%D0%BE">Хикари Эйто</a>&nbsp;(31)</span>

                            <span>84.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9F%D0%B7%D1%8A">Пзъ</a>&nbsp;(31)</span>

                            <span>85.&nbsp;<a href="https://godville.net/gods/%D0%A4%D0%B5%D0%BB%D0%B8%D1%81%D0%B0">Фелиса</a>&nbsp;(31)</span>

                            <span>86.&nbsp;<a href="https://godville.net/gods/Insean">Insean</a>&nbsp;(31)</span>

                            <span>87.&nbsp;<a href="https://godville.net/gods/S%20S%20S">S S S</a>&nbsp;(31)</span>

                            <span>88.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D0%BE%D1%80%D0%B3%D0%BE%D1%82%20%D0%9A%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D1%8B%D0%B9">Моргот Кровавый</a>&nbsp;(31)</span>

                            <span>89.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9D%D1%8D%D1%82%D1%81%D1%84%D0%B5%D1%80%D0%B0-%D0%9A%D0%BE%D1%80%D0%BF">Нэтсфера-Корп</a>&nbsp;(30)</span>

                            <span>90.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9A%D1%83%D1%80%D0%B2%D0%B0%D0%BC%D1%8B%D1%88%D1%8C">Курвамышь</a>&nbsp;(30)</span>

                            <span>91.&nbsp;<a
                                        href="https://godville.net/gods/%D0%91%D0%BE%D1%85%D0%B8%D0%BF%D0%BE%D1%85">Бохипох</a>&nbsp;(30)</span>

                            <span>92.&nbsp;<a href="https://godville.net/gods/%D0%90%D0%BD%D1%82%D0%BE%D1%81%D1%8C">Антось</a>&nbsp;(30)</span>

                            <span>93.&nbsp;<a
                                        href="https://godville.net/gods/%D0%94%D0%B5%D0%B0%20%D0%90%D1%80%D0%BA%D1%82%20%D0%9B%D1%8E%D0%BA%D1%81">Деа Аркт Люкс</a>&nbsp;(30)</span>

                            <span>94.&nbsp;<a
                                        href="https://godville.net/gods/%D0%9C%D0%B8%D0%B0%D0%BD%D0%B4%D1%80%D0%B8%D1%8D%D0%BB%D1%8C">Миандриэль</a>&nbsp;(30)</span>

                            <span>95.&nbsp;<a href="https://godville.net/gods/Olzirg">Olzirg</a>&nbsp;(30)</span>

                            <span>96.&nbsp;<a href="https://godville.net/gods/KOTSO">KOTSO</a>&nbsp;(30)</span>

                            <span>97.&nbsp;<a
                                        href="https://godville.net/gods/%D0%AD%D0%B2%D0%B8%D1%82%D0%B0%D1%80%D0%B5">Эвитаре</a>&nbsp;(30)</span>

                            <span>98.&nbsp;<a href="https://godville.net/gods/Ozornik">Ozornik</a>&nbsp;(30)</span>

                            <span>99.&nbsp;<a href="https://godville.net/gods/Egoros">Egoros</a>&nbsp;(30)</span>

                            <span>100.&nbsp;<a
                                        href="https://godville.net/gods/%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%20%D0%A0%D1%83%D0%B4%D0%B0%D0%BA%D0%BE%D0%B2">Александр Рудаков</a>&nbsp;(30)</span>

                        </p>

                        <p><a href="https://godville.net/forums/show_topic/3405">Правила</a></p>

                    </div>

                    <script nonce="">

                        jQuery(document).ready(function () {
                            var b_show = $("#bgn_show");
                            var b_use = $("#bgn_use");
                            var b_end = $("#bgn_end");
                            var b_confirm = 'Завершить игру досрочно и получить часть награды?'

                        });
                    </script>

                    <div class="hero clearfix">
                        <h2>Их надо знать в лицо</h2>

                        <p><b> <a href="https://godville.net/gods/Afina-li">Viral-li</a> </b> — приключенец <b> 114</b>-го
                            уровня из гильдии <em class="tdir">«Ряды Фурье»</em> с девизом <span class="tdir hod_motto">«[R]and[O][M]»</span>,
                            занимающий <b>55</b>-е место <a href="https://godville.net/pantheon/12">пантеона
                                звероводства</a> под неусыпным надзором бога <b> <a
                                        href="https://godville.net/gods/Afina-li">Afina-li</a></b>. Пользуясь случаем,
                            передаёт привет родной гильдии.</p>

                        <p><b>
                                <a href="https://godville.net/gods/%D0%9A%D0%B0%D0%BC%D0%B3%D0%BE%D1%80%D0%BD%D1%8B%D0%B9%20%D0%91%D1%80%D0%B0%D0%BD%D0%B4%D0%B0%D1%85%D0%BC%D1%83%D0%BD">Сивилирек
                                    Удатный</a> </b> — приключенец <b> 66</b>-го уровня из гильдии <em class="tdir">«Секта
                                Абсолютной Любви»</em> с девизом <span class="tdir hod_motto">«Deus vult!»</span>,
                            занимающий <b>191</b>-е место <a href="https://godville.net/pantheon/7">пантеона
                                созидания</a> под неусыпным надзором бога <b> <a
                                        href="https://godville.net/gods/%D0%9A%D0%B0%D0%BC%D0%B3%D0%BE%D1%80%D0%BD%D1%8B%D0%B9%20%D0%91%D1%80%D0%B0%D0%BD%D0%B4%D0%B0%D1%85%D0%BC%D1%83%D0%BD">Камгорный
                                    Брандахмун</a></b>. Умудрился задолбать редакцию просьбами написать что-нибудь о
                            нём.</p>

                    </div>

                    <div class="game clearfix">
                        <h2>Разыскиваются</h2>
                        <div class="column_left">

                            <p>Группой экологов установлено, что именно <a
                                        href="https://wiki.godville.net/index.php/%D0%93%D1%80%D0%B5%D1%85%D1%83%D0%BB%D0%B5%D1%81"
                                        target="_blank" title="перейти к описанию монстра Грехулес в энциклобогии">Грехулес</a>
                                обгладывает верхушки сосен. Убей монстра — спаси дерево!</p>

                            <p class="label">Сегодняшний улов: 644 шт.</p>

                        </div>

                        <div class="column_right">
                            <p>Топовый герой, пожелавший остаться неизвестным, объявил о дне ликвидации вида <a
                                        href="https://wiki.godville.net/index.php/%D0%9A%D0%BE%D1%89%D0%B5%D0%B9%20%D0%91%D0%B5%D0%B7%D0%B2%D1%80%D0%B5%D0%B4%D0%BD%D1%8B%D0%B9"
                                        target="_blank"
                                        title="перейти к описанию монстра Кощей Безвредный в энциклобогии">Кощей
                                    Безвредный</a>. Поддержавшие благое намерение могут рассчитывать на достойную
                                награду.</p>

                            <p class="label">Сегодняшний улов: 1039 шт.</p>

                        </div>

                    </div>

                    <div class="hero clearfix">
                        <h2>Идёт набор</h2>

                        <p><b><a target="_blank"
                                 href="https://godville.net/stats/guild/%D0%9E%D1%80%D1%82%D0%BE%D0%B3%D0%BE%D0%BD%D0%B8%D1%81%D1%82%D1%8B">Ортогонисты</a></b>
                            — группа героев и героинь, занявшая <b>41</b>-е место <a target="_blank"
                                                                                     href="https://godville.net/pantheon/show/adventure">пантеона
                                авантюрности</a>. По последним данным их <b>99</b> или около того. Старший чин у них
                            зовётся «сельдерей». Верят, что тотемный монстр Антагонист требует жертв. Основную массу
                            любопытных фактов об этой гильдии бумага не стерпит.</p>

                        <p><b><a target="_blank"
                                 href="https://godville.net/stats/guild/%D0%93%D0%B8%D0%BB%D1%8C%D0%B4%D0%B8%D1%8F%20%D0%93%D0%BE%D1%80%D0%B4%D1%8B%D1%85%20%D0%9C%D1%83%D0%BC%D1%83%D1%81%D0%B8%D0%BA%D0%BE%D0%B2!">Гильдия
                                    Гордых Мумусиков!</a></b> — гильдия из <b>106</b> героев, занимающая <b>65</b>-е
                            место <a target="_blank" href="https://godville.net/pantheon/show/popularity">пантеона
                                влиятельности</a>. Позывной элиты гильдии — «величавый». Мумифицированный Тролль
                            отказывается комментировать свою связь с гильдией. Разница между побоищем и попоищем для
                            гильдии минимальна.</p>

                    </div>

                    <div class="town clearfix">
                        <h2>Сферы влияния в городе
                            <select id="town_id" name="town[id]">
                                <option value="1">Годвилль, 0 ст.</option>
                                <option value="62">Средние Гильдюки, 3 ст.</option>
                                <option value="28">Подмостква, 7 ст.</option>
                                <option value="21">Пустосвятово, 16 ст.</option>
                                <option value="29">Большие Бодуны, 25 ст.</option>
                                <option value="22">Злыденьск, 32 ст.</option>
                                <option value="60">Мухомуромск, 38 ст.</option>
                                <option value="40">Торгбург, 42 ст.</option>
                                <option value="50">ЛосАдминос, 47 ст.</option>
                                <option value="12">Храмовище, 53 ст.</option>
                                <option value="71">Скрежетальск, 58 ст.</option>
                                <option value="80">Някинск, 65 ст.</option>
                                <option value="61">Хироин, 74 ст.</option>
                                <option value="41">Снаряжуполь, 85 ст.</option>
                                <option value="24">Еретиченск, 92 ст.</option>
                                <option value="30">Пивнотаун, 106 ст.</option>
                                <option value="51">Малые Саппортуны, 115 ст.</option>
                                <option value="13">Храмбург, 122 ст.</option>
                                <option value="25">ЛосДемонос, 136 ст.</option>
                                <option value="27">Нижние Котлы, 149 ст.</option>
                                <option value="31">Тризвездинск, 162 ст.</option>
                                <option value="72">Ёмаёво, 170 ст.</option>
                                <option value="101">Гейзенбург, 178 ст.</option>
                                <option value="26">СанСатанос, 188 ст.</option>
                                <option value="63">Геролимп, 195 ст.</option>
                                <option value="23">Некропетровск, 204 ст.</option>
                                <option value="82">Бугагота, 230 ст.</option>
                                <option value="83">Воблинск, 252 ст.</option>
                                <option value="84" selected="selected">Шиферодвинск, 271 ст.</option>
                                <option value="85">Левелаполь, 306 ст.</option>
                                <option value="86">Догвилль, 348 ст.</option>
                                <option value="87">Шизариумск, 404 ст.</option>
                                <option value="88">Академонгородок, 451 ст.</option>
                                <option value="89">Боянск, 502 ст.</option>
                                <option value="90">Заходилово, 537 ст.</option>
                                <option value="92">Богород, 610 ст.</option>
                                <option value="91">Годвильвуд, 666 ст.</option>
                                <option value="93">Вольнодумск, 701 ст.</option>
                            </select>
                            <div style="text-align:center;"><img align="middle" alt="Spinner" border="0"
                                                                 id="spinner_imp"
                                                                 src="./Газета Годвилля_files/spinner.gif"
                                                                 style="display: none; vertical-align:bottom;">
                            </div>
                        </h2>
                        <div class="town_wrapper">
                            <div id="influence">
                                <div class="column_left">

                                    <p>16% — 4PDA</p>

                                    <p>10% — Орден Водяной Вороны</p>

                                    <p>9% — Каэр Морхен</p>

                                    <p>7% — дом семи ветров</p>

                                    <p>7% — Драконы Годвилля</p>

                                </div>
                                <div class="column_right">

                                    <p>5% — Хренелли</p>

                                    <p>5% — Шахтёры</p>

                                    <p>5% — 42</p>

                                    <p>5% — Энлайт</p>

                                    <p>31% — остальные гильдии</p>

                                </div>
                                <p class="wiki_link"><a
                                            href="https://wiki.godville.net/%D0%A8%D0%B8%D1%84%D0%B5%D1%80%D0%BE%D0%B4%D0%B2%D0%B8%D0%BD%D1%81%D0%BA"
                                            target="_blank" title="открыть города Шиферодвинск в Энциклобогии">Шиферодвинск
                                        в Энциклобогии</a></p>

                            </div>
                        </div>

                    </div>

                    <div class="game clearfix">
                        <h2>Куплю-продам</h2>

                        <div class="column_left">
                            <p>Пять раз купим один трофей. Несите <a
                                        href="https://wiki.godville.net/index.php/%D0%BE%D1%81%D0%BE%D0%B1%D0%BE%D0%B5%20%D0%BF%D1%80%D0%B8%D0%B3%D0%BB%D0%B0%D1%88%D0%B5%D0%BD%D0%B8%D0%B5"
                                        target="_blank" title="прочитать про особое приглашение в Энциклобогии">особое
                                    приглашение</a> в столичную лавку «Небзделушки», спросите героя <a
                                        href="https://godville.net/gods/%D0%9D%D0%B5%D0%B1%D0%B7%D0%B4%D0%B5%D0%BC%D1%83%D0%BB"
                                        target="_blank" title="к личной странице">ХеррКулЛесс</a>.</p>

                            <p class="label">Сдано: 50 шт.</p>

                        </div>

                        <div class="column_right">

                            <p>Сегодня торговцы просто вырывают из рук <a
                                        href="https://wiki.godville.net/index.php/%D0%BF%D1%80%D0%BE%D1%8F%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%20%D1%87%D1%83%D0%B2%D1%81%D1%82%D0%B2"
                                        target="_blank" title="прочитать про проявитель чувств в Энциклобогии">проявитель
                                    чувств</a>! Главное требование — пробег не более трёх монстров.</p>

                        </div>

                    </div>

                    <div class="add clearfix">
                        <h2>Реклама</h2>

                        <p class="add_1">Если при встрече с сильным монстром вы тихо материтесь, то у вас простужено
                            горло. Сообщество лекарей города Заходилово всегда готово выписать вам целебные припарки.
                            Берегите себя!</p>

                        <p class="add_2">Туристическая фирма «Ясон и алконавты» приглашает героев в увлекательное турне
                            по бутылкам с заграничными этикетками. Приводи друга — вместе веселее!</p>

                        <p class="add_3">Когда линяют пухозаврики? Как противостоять взгляду голодного гипноманула и
                            научить хомячка-берсеркера приносить тапки? Новый учебник «Я и моя пушистая прелесть»!</p>

                    </div>

                    <div class="chart clearfix">
                        <h2>Немного статистики</h2>
                        <div class="chart_content">
                            <div class="chart_wrapper">
                                <div class="column_left">
                                    <img alt="chart" border="0" src="./Газета Годвилля_files/chart"
                                         style="position:relative; top:-10px;left:-20px;">
                                </div>
                                <div class="column_right">
                                    <p><b>Перепись населения</b><br> Администрация за подсчёт ничего не несёт.</p>
                                </div>
                            </div>

                            <div class="chart_wrapper">
                                <div class="column_left">
                                    <img alt="chart" border="0" src="./Газета Годвилля_files/chart(1)"
                                         style="position:relative; top:-10px;left:-20px;">
                                </div>

                                <div class="column_right">
                                    <p><b>Спортивные достижения</b><br> Добрые герои бьют все рекорды. Но злые герои
                                        бьют добрых.</p>
                                </div>
                            </div>

                        </div>

                        <div class="stats_wrapper"><p><a href="https://stats.godville.net/me" target="_blank">Статистика
                                    моего героя</a></p></div>

                    </div>

                    <div class="game clearfix" id="cross_block">
                        <h2>Кроссворд</h2>

                        <form>

                            <div id="twl_wrap" style="text-align:center;">

                                <div id="cross_tbl_wrap">
                                    <table id="cross_tbl" style="" role="presentation">

                                        <tbody>
                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <div class="num">1</div>

                                                    <input aria-label="1 По горизонтали, Монстр, буква 1. 1 По вертикали, Трофей, буква 1"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_0_0"
                                                           name="c[0][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По горизонтали, Монстр, буква 2"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_1_0"
                                                           name="c[1][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По горизонтали, Монстр, буква 3 - Й">Й
                                                    </div>
                                                    <input id="c_2_0" name="c[2][0]" type="hidden" value="Й">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По горизонтали, Монстр, буква 4"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_3_0"
                                                           name="c[3][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По горизонтали, Монстр, буква 5 - -">-
                                                    </div>
                                                    <input id="c_4_0" name="c[4][0]" type="hidden" value="-">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По горизонтали, Монстр, буква 6 - Л">Л
                                                    </div>
                                                    <input id="c_5_0" name="c[5][0]" type="hidden" value="Л">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По горизонтали, Монстр, буква 7"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_6_0"
                                                           name="c[6][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По горизонтали, Монстр, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_7_0"
                                                           name="c[7][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По горизонтали, Монстр, буква 9 - Ы">Ы
                                                    </div>
                                                    <input id="c_8_0" name="c[8][0]" type="hidden" value="Ы">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По горизонтали, Монстр, буква 10 - Р">Р
                                                    </div>
                                                    <input id="c_9_0" name="c[9][0]" type="hidden" value="Р">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По горизонтали, Монстр, буква 11"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_10_0"
                                                           name="c[10][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <div class="num">2</div>

                                                    <input aria-label="2 По горизонтали, Монстр, буква 1"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_12_0"
                                                           name="c[12][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="2 По горизонтали, Монстр, буква 2 - А">А
                                                    </div>
                                                    <input id="c_13_0" name="c[13][0]" type="hidden" value="А">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="2 По горизонтали, Монстр, буква 3"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_14_0"
                                                           name="c[14][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="2 По горизонтали, Монстр, буква 4 - А">А
                                                    </div>
                                                    <input id="c_15_0" name="c[15][0]" type="hidden" value="А">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="2 По горизонтали, Монстр, буква 5"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_16_0"
                                                           name="c[16][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="2 По горизонтали, Монстр, буква 6 - -">-
                                                    </div>
                                                    <input id="c_17_0" name="c[17][0]" type="hidden" value="-">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="2 По горизонтали, Монстр, буква 7"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_18_0"
                                                           name="c[18][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="2 По горизонтали, Монстр, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_19_0"
                                                           name="c[19][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="2 По горизонтали, Монстр, буква 9 - Х">Х
                                                    </div>
                                                    <input id="c_20_0" name="c[20][0]" type="hidden" value="Х">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="2 По горизонтали, Монстр, буква 10 - А">А
                                                    </div>
                                                    <input id="c_21_0" name="c[21][0]" type="hidden" value="А">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <div class="num">3</div>

                                                    <input aria-label="2 По горизонтали, Монстр, буква 11. 3 По вертикали, Монстр, буква 1"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_22_0"
                                                           name="c[22][0]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По вертикали, Трофей, буква 2 - Л">Л
                                                    </div>
                                                    <input id="c_0_1" name="c[0][1]" type="hidden" value="Л">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="3 По вертикали, Монстр, буква 2"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_22_1"
                                                           name="c[22][1]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По вертикали, Трофей, буква 3 - Е">Е
                                                    </div>
                                                    <input id="c_0_2" name="c[0][2]" type="hidden" value="Е">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="3 По вертикали, Монстр, буква 3 - Т">Т
                                                    </div>
                                                    <input id="c_22_2" name="c[22][2]" type="hidden" value="Т">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По вертикали, Трофей, буква 4"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_0_3"
                                                           name="c[0][3]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <div class="num">4</div>

                                                    <input aria-label="4 По вертикали, Трофей, буква 1"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_3_3"
                                                           name="c[3][3]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="num">5</div>

                                                    <div class="open" role="option"
                                                         aria-label="5 По вертикали, Снаряжение, буква 1 - Э">Э
                                                    </div>
                                                    <input id="c_11_3" name="c[11][3]" type="hidden" value="Э">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="num">6</div>

                                                    <div class="open" role="option"
                                                         aria-label="6 По вертикали, Монстр, буква 1 - У">У
                                                    </div>
                                                    <input id="c_19_3" name="c[19][3]" type="hidden" value="У">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="3 По вертикали, Монстр, буква 4"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_22_3"
                                                           name="c[22][3]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По вертикали, Трофей, буква 5"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_0_4"
                                                           name="c[0][4]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="4 По вертикали, Трофей, буква 2 - Ъ">Ъ
                                                    </div>
                                                    <input id="c_3_4" name="c[3][4]" type="hidden" value="Ъ">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="5 По вертикали, Снаряжение, буква 2"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_11_4"
                                                           name="c[11][4]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="6 По вертикали, Монстр, буква 2"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_19_4"
                                                           name="c[19][4]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="3 По вертикали, Монстр, буква 5"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_22_4"
                                                           name="c[22][4]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По вертикали, Трофей, буква 6 - Д">Д
                                                    </div>
                                                    <input id="c_0_5" name="c[0][5]" type="hidden" value="Д">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="num">7</div>

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 1 - С">С
                                                    </div>
                                                    <input id="c_2_5" name="c[2][5]" type="hidden" value="С">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="4 По вертикали, Трофей, буква 3. 7 По горизонтали, Умение, буква 2"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_3_5"
                                                           name="c[3][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 3"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_4_5"
                                                           name="c[4][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 4 - С">С
                                                    </div>
                                                    <input id="c_5_5" name="c[5][5]" type="hidden" value="С">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 5"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_6_5"
                                                           name="c[6][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 6 - И">И
                                                    </div>
                                                    <input id="c_7_5" name="c[7][5]" type="hidden" value="И">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 7"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_8_5"
                                                           name="c[8][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_9_5"
                                                           name="c[9][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 9 - С">С
                                                    </div>
                                                    <input id="c_10_5" name="c[10][5]" type="hidden" value="С">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="5 По вертикали, Снаряжение, буква 3. 7 По горизонтали, Умение, буква 10"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_11_5"
                                                           name="c[11][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 11"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_12_5"
                                                           name="c[12][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 12 - Й">Й
                                                    </div>
                                                    <input id="c_13_5" name="c[13][5]" type="hidden" value="Й">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 13 -  "></div>
                                                    <input id="c_14_5" name="c[14][5]" type="hidden" value=" ">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 14"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_15_5"
                                                           name="c[15][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 15 - Р">Р
                                                    </div>
                                                    <input id="c_16_5" name="c[16][5]" type="hidden" value="Р">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 16"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_17_5"
                                                           name="c[17][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="7 По горизонтали, Умение, буква 17"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_18_5"
                                                           name="c[18][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="6 По вертикали, Монстр, буква 3. 7 По горизонтали, Умение, буква 18"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_19_5"
                                                           name="c[19][5]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="7 По горизонтали, Умение, буква 19 - К">К
                                                    </div>
                                                    <input id="c_20_5" name="c[20][5]" type="hidden" value="К">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="3 По вертикали, Монстр, буква 6 - Ю">Ю
                                                    </div>
                                                    <input id="c_22_5" name="c[22][5]" type="hidden" value="Ю">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По вертикали, Трофей, буква 7 - О">О
                                                    </div>
                                                    <input id="c_0_6" name="c[0][6]" type="hidden" value="О">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="4 По вертикали, Трофей, буква 4 - Л">Л
                                                    </div>
                                                    <input id="c_3_6" name="c[3][6]" type="hidden" value="Л">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="5 По вертикали, Снаряжение, буква 4 - У">У
                                                    </div>
                                                    <input id="c_11_6" name="c[11][6]" type="hidden" value="У">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="6 По вертикали, Монстр, буква 4 - Р">Р
                                                    </div>
                                                    <input id="c_19_6" name="c[19][6]" type="hidden" value="Р">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="3 По вертикали, Монстр, буква 7 - Б">Б
                                                    </div>
                                                    <input id="c_22_6" name="c[22][6]" type="hidden" value="Б">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По вертикали, Трофей, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_0_7"
                                                           name="c[0][7]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="4 По вертикали, Трофей, буква 5 - Ф">Ф
                                                    </div>
                                                    <input id="c_3_7" name="c[3][7]" type="hidden" value="Ф">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="5 По вертикали, Снаряжение, буква 5 - Л">Л
                                                    </div>
                                                    <input id="c_11_7" name="c[11][7]" type="hidden" value="Л">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="6 По вертикали, Монстр, буква 5 - Я">Я
                                                    </div>
                                                    <input id="c_19_7" name="c[19][7]" type="hidden" value="Я">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="3 По вертикали, Монстр, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_22_7"
                                                           name="c[22][7]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="1 По вертикали, Трофей, буква 9 - А">А
                                                    </div>
                                                    <input id="c_0_8" name="c[0][8]" type="hidden" value="А">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="num">8</div>

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 1 - К">К
                                                    </div>
                                                    <input id="c_2_8" name="c[2][8]" type="hidden" value="К">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="4 По вертикали, Трофей, буква 6. 8 По горизонтали, Снаряжение, буква 2"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_3_8"
                                                           name="c[3][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 3"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_4_8"
                                                           name="c[4][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 4"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_5_8"
                                                           name="c[5][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 5"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_6_8"
                                                           name="c[6][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 6 - А">А
                                                    </div>
                                                    <input id="c_7_8" name="c[7][8]" type="hidden" value="А">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 7"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_8_8"
                                                           name="c[8][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_9_8"
                                                           name="c[9][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 9 - Н">Н
                                                    </div>
                                                    <input id="c_10_8" name="c[10][8]" type="hidden" value="Н">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="5 По вертикали, Снаряжение, буква 6. 8 По горизонтали, Снаряжение, буква 10"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_11_8"
                                                           name="c[11][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 11 - Я">Я
                                                    </div>
                                                    <input id="c_12_8" name="c[12][8]" type="hidden" value="Я">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 12 -  "></div>
                                                    <input id="c_13_8" name="c[13][8]" type="hidden" value=" ">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 13"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_14_8"
                                                           name="c[14][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 14"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_15_8"
                                                           name="c[15][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 15 - Л">Л
                                                    </div>
                                                    <input id="c_16_8" name="c[16][8]" type="hidden" value="Л">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 16 - О">О
                                                    </div>
                                                    <input id="c_17_8" name="c[17][8]" type="hidden" value="О">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="8 По горизонтали, Снаряжение, буква 17 - Ч">Ч
                                                    </div>
                                                    <input id="c_18_8" name="c[18][8]" type="hidden" value="Ч">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="6 По вертикали, Монстр, буква 6. 8 По горизонтали, Снаряжение, буква 18"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_19_8"
                                                           name="c[19][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="8 По горизонтали, Снаряжение, буква 19"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_20_8"
                                                           name="c[20][8]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="3 По вертикали, Монстр, буква 9 - В">В
                                                    </div>
                                                    <input id="c_22_8" name="c[22][8]" type="hidden" value="В">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="1 По вертикали, Трофей, буква 10"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_0_9"
                                                           name="c[0][9]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="5 По вертикали, Снаряжение, буква 7 - П">П
                                                    </div>
                                                    <input id="c_11_9" name="c[11][9]" type="hidden" value="П">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class=" ">
                                                <div class="c_wrap">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="3 По вертикали, Монстр, буква 10 - Ы">Ы
                                                    </div>
                                                    <input id="c_22_9" name="c[22][9]" type="hidden" value="Ы">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cc_wrap">
                                                <div class="c_wrap cc_wrap"></div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <div class="num">9</div>

                                                    <input aria-label="1 По вертикали, Трофей, буква 11. 9 По горизонтали, Снаряжение, буква 1"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_0_10"
                                                           name="c[0][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 2 - Е">Е
                                                    </div>
                                                    <input id="c_1_10" name="c[1][10]" type="hidden" value="Е">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 3"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_2_10"
                                                           name="c[2][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 4 - Ь">Ь
                                                    </div>
                                                    <input id="c_3_10" name="c[3][10]" type="hidden" value="Ь">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 5 - Н">Н
                                                    </div>
                                                    <input id="c_4_10" name="c[4][10]" type="hidden" value="Н">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 6"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_5_10"
                                                           name="c[5][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 7 - Ш">Ш
                                                    </div>
                                                    <input id="c_6_10" name="c[6][10]" type="hidden" value="Ш">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 8"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_7_10"
                                                           name="c[7][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 9"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_8_10"
                                                           name="c[8][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 10 -  "></div>
                                                    <input id="c_9_10" name="c[9][10]" type="hidden" value=" ">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 11 - Т">Т
                                                    </div>
                                                    <input id="c_10_10" name="c[10][10]" type="hidden" value="Т">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="5 По вертикали, Снаряжение, буква 8. 9 По горизонтали, Снаряжение, буква 12"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_11_10"
                                                           name="c[11][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 13"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_12_10"
                                                           name="c[12][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 14"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_13_10"
                                                           name="c[13][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 15 - Ч">Ч
                                                    </div>
                                                    <input id="c_14_10" name="c[14][10]" type="hidden" value="Ч">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 16"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_15_10"
                                                           name="c[15][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 17 -  "></div>
                                                    <input id="c_16_10" name="c[16][10]" type="hidden" value=" ">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 18 - Ч">Ч
                                                    </div>
                                                    <input id="c_17_10" name="c[17][10]" type="hidden" value="Ч">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 19"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_18_10"
                                                           name="c[18][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 20"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_19_10"
                                                           name="c[19][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell known ">
                                                <div class="c_wrap">

                                                    <div class="open" role="option"
                                                         aria-label="9 По горизонтали, Снаряжение, буква 21 - Т">Т
                                                    </div>
                                                    <input id="c_20_10" name="c[20][10]" type="hidden" value="Т">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="9 По горизонтали, Снаряжение, буква 22"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_21_10"
                                                           name="c[21][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="td_cell ">
                                                <div class="c_wrap">

                                                    <input aria-label="3 По вертикали, Монстр, буква 11. 9 По горизонтали, Снаряжение, буква 23"
                                                           autocomplete="off" autocorrect="off" class="sym" id="c_22_10"
                                                           name="c[22][10]" spellcheck="false" type="text" value="">

                                                </div>
                                            </td>

                                            <td class="cc_wrap">
                                                <div class="c_wrap"></div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="cross_q">

                                    <span>По горизонтали:</span>

                                    1.&nbsp;Монстр.

                                    2.&nbsp;Монстр.

                                    7.&nbsp;Умение.

                                    8.&nbsp;Снаряжение.

                                    9.&nbsp;Снаряжение.

                                    <br>
                                    <span>По вертикали:</span>

                                    1.&nbsp;Трофей.

                                    3.&nbsp;Монстр.

                                    4.&nbsp;Трофей.

                                    5.&nbsp;Снаряжение.

                                    6.&nbsp;Монстр.

                                </div>

                                <p><input id="crossword_submit" name="commit" type="submit" value="Отправить решение">
                                </p>

                                <img align="middle" alt="Spinner" border="0" id="submit_sin"
                                     src="./Газета Годвилля_files/spinner.gif"
                                     style="vertical-align:bottom; display: none;">

                                <p id="cross_res"></p>

                                <script nonce="">
                                    jQuery(document).ready(function () {

                                        var cfd_bind = function () {
                                            $('#cfd_toggle').click(function (event) {
                                                jQuery('#cfd').slideToggle();
                                                return false;
                                            });
                                        };
                                        cfd_bind();

                                        var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);

                                        var focus_on = function (el) {
                                            if (!iOS) {
                                                el.focus();
                                            }
                                        };

                                        var max_x = 23;
                                        var max_y = 11;

                                        jQuery('#crossword_submit').click(function (event) {
                                            $('#submit_sin').show();

                                            event.preventDefault();
                                            return false;
                                        });

                                        var ls_supported = ('localStorage' in window && window['localStorage'] !== null);

                                        var crs_id = '3e46afb2b7854b50ae706b9305a9ecd8';
                                        if (ls_supported) {
                                            var last = localStorage.getItem("crswd");
                                            if (crs_id != last) {
                                                localStorage.setItem("crsw", JSON.stringify({}));
                                            }
                                        }

                                        var save_crossword = function (id, value) {
                                            if (ls_supported && value.length <= 1) {
                                                var crossword = localStorage.getItem("crsw");
                                                try {
                                                    crossword = $.parseJSON(crossword);
                                                }
                                                catch (err) {
                                                    crossword = undefined
                                                }
                                                if (crossword == undefined) {
                                                    crossword = {};
                                                }
                                                crossword[id] = value;
                                                try {
                                                    localStorage.setItem("crsw", JSON.stringify(crossword));
                                                }
                                                catch (err) {
                                                }
                                            }
                                        }

                                        try {
                                            if (ls_supported) {
                                                var crossword = localStorage.getItem("crsw");
                                                crossword = $.parseJSON(crossword);
                                                if (crossword != null) {
                                                    for (var key in crossword) {
                                                        if (crossword.hasOwnProperty(key)) {
                                                            var el = $('#' + key);
                                                            if (el) {
                                                                el.val(crossword[key]);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        catch (err) {
                                        }

                                        if (ls_supported) {
                                            try {
                                                localStorage.setItem("crswd", crs_id);
                                            }
                                            catch (err) {
                                            }
                                        }

                                        var find_next_x = function (x, y, fw, hidden) {
                                            var new_x = x + 1;
                                            if (!fw) {
                                                new_x = x - 1;
                                            }
                                            var next_x = jQuery('#c_' + new_x + '_' + y);
                                            if (next_x.length > 0) {
                                                if (!next_x.attr('disabled') && next_x.attr('type') != 'hidden') {
                                                    return [next_x, new_x, y];
                                                }
                                                else {
                                                    return find_next_x(new_x, y, fw, hidden);
                                                }
                                            }
                                            else if (hidden && new_x <= max_x && new_x >= 0) {
                                                return find_next_x(new_x, y, fw, hidden);
                                            }
                                            return undefined;
                                        }

                                        var find_next_y = function (x, y, fw, hidden) {
                                            var new_y = y + 1;
                                            if (!fw) {
                                                new_y = y - 1;
                                            }
                                            var next_y = jQuery('#c_' + x + '_' + new_y);
                                            if (next_y.length > 0) {
                                                if (!next_y.attr('disabled') && next_y.attr('type') != 'hidden') {
                                                    return [next_y, x, new_y];
                                                }
                                                else {
                                                    return find_next_y(x, new_y, fw, hidden);
                                                }
                                            }
                                            else if (hidden && new_y <= max_y && new_y >= 0) {
                                                return find_next_y(x, new_y, fw, hidden);
                                            }
                                            return undefined;
                                        }

                                        jQuery('.sym').on("keyup", function (event) {
                                            var string = this.id;
                                            var arr = string.match(/c_(\d*)_(\d*)/);
                                            var x = parseInt(arr[1]);
                                            var y = parseInt(arr[2]);

                                            var focus_el = undefined;
                                            var next_dir = undefined;
                                            var next_ret = undefined;
                                            if (event.keyCode == 39) { // right
                                                next_ret = find_next_x(x, y, true, true);
                                                next_dir = 'h';
                                            }
                                            else if (event.keyCode == 37 || (event.keyCode == 8 && window.crswd_dir != 'v')) { //left or backspace
                                                next_ret = find_next_x(x, y, false, true);
                                                next_dir = 'h';
                                            }
                                            else if (event.keyCode == 38 || (event.keyCode == 8 && window.crswd_dir != 'h')) { // up or backspace
                                                next_ret = find_next_y(x, y, false, true);
                                                next_dir = 'v';
                                            }
                                            else if (event.keyCode == 40) { // down
                                                next_ret = find_next_y(x, y, true, true);
                                                next_dir = 'v';
                                            }
                                            if (next_ret) {
                                                focus_el = next_ret[0];
                                            }
                                            if (focus_el) {
                                                focus_on(focus_el);
                                            }
                                            if (next_dir) {
                                                if (focus_el) {
                                                    window.crswd_dir = next_dir;
                                                }
                                                save_crossword(string, event.target.value);
                                                event.preventDefault();
                                                return false;
                                            }

                                            var next_x_ret = find_next_x(x, y, true, false);
                                            var next_y_ret = find_next_y(x, y, true, false);

                                            if (next_x_ret && window.crswd_dir == 'h') {
                                                focus_el = next_x_ret[0];
                                            }
                                            else if (next_y_ret && window.crswd_dir == 'v') {
                                                focus_el = next_y_ret[0];
                                            }
                                            else {
                                                if (next_x_ret && next_y_ret) {
                                                    var x_diff = next_x_ret[1] - x;
                                                    var y_diff = next_y_ret[2] - y;
                                                    if (x_diff <= y_diff && window.crswd_dir != 'v') {
                                                        focus_el = next_x_ret[0];
                                                        window.crswd_dir = 'h';
                                                    }
                                                    else {
                                                        focus_el = next_y_ret[0];
                                                        window.crswd_dir = 'v';
                                                    }
                                                }
                                                else if (next_x_ret) {
                                                    focus_el = next_x_ret[0];
                                                    window.crswd_dir = 'h';
                                                }
                                                else if (next_y_ret) {
                                                    focus_el = next_y_ret[0];
                                                    window.crswd_dir = 'v';
                                                }
                                            }

                                            var val = this.value;
                                            if (val) {
                                                val = val.replace(/[^0-9a-zа-яё\-‒—\s]/ig, '');
                                            }
                                            if (val.length > 1) {
                                                val = val.trim();
                                                if (val.length > 1) {
                                                    val = val.slice(-1);
                                                }
                                            }

                                            if (val.length != 0 && focus_el) {
                                                focus_on(focus_el);
                                            }

                                            jQuery(this).val(val.toUpperCase());

                                            save_crossword(string, event.target.value);

                                            event.preventDefault();
                                            return false;

                                        })
                                        jQuery('.sym').click(function (event) {
                                            window.crswd_dir = undefined;
                                        })
                                    }).on("focusin", 'input[type=text]', function (event) {
                                            if (window.getSelection) {
                                                var ctrl = event.target;
                                                if ($(ctrl).hasClass('sym')) {
                                                    var val = $(ctrl).val();
                                                    setTimeout(function () {
                                                        ctrl.selectionStart = 0;
                                                        ctrl.selectionEnd = val.length;
                                                    }, 0);
                                                }
                                            }
                                        }
                                    );
                                </script>

                            </div>

                        </form>

                        <div id="crossword_footer">

                            <p class="cross_footer">

                                Последний отгадавший: <a
                                        href="https://godville.net/gods/%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%B8%D0%B9%20%D0%A2%D0%BE%D1%82%D0%BA%D1%82%D0%BE%D0%BD%D0%B0%D0%B4%D0%B0">Великий
                                    Тотктонада</a> (<a href="https://godville.net/news" id="cfd_toggle">еще</a>)
                            </p>
                            <p class="cross_footer" style="display:none;" id="cfd">
                                <span><a href="https://godville.net/gods/Just%20Kate">Just Kate</a></span>, <span><a
                                            href="https://godville.net/gods/Zhorzia">Zhorzia</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%92%D1%80%D1%83%D0%B1%D0%B5%D0%BB%D1%8C">Врубель</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9A%D0%BE%D1%82%20%D0%9C%D0%B0%D1%82%D1%80%D0%BE%D1%81%D0%BA%D0%B8%D0%BD">Кот Матроскин</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A0%D1%8F%D0%B1%D0%BE%D1%86%D1%8B%D0%BF">Рябоцып</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9C%D0%B0%D0%B9%D0%BE%D1%80%20%D0%92%D0%B8%D1%85%D1%80%D1%8C">Майор Вихрь</a></span>,
                                <span><a href="https://godville.net/gods/%D0%91%D1%83%D0%B1%D0%BE%D1%87%D0%BA%D0%B0%20%D0%AF">Бубочка Я</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9A%D0%B0%D0%BF%D0%B0%D0%BF%D0%BF%D0%B0">Капаппа</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A1%D0%B5%D1%80%D0%B5%D0%B1%D1%80%D1%8F%D0%BD%D1%8B%D0%B9%20%D0%9A%D0%BE%D1%80%D0%B2%D0%B8%D0%BD">Серебряный Корвин</a></span>,
                                <span><a href="https://godville.net/gods/%D0%91%D0%BE%D0%B6%D0%B5%D1%87%D0%BA%D0%B8%20%D0%A1%D0%B0%D0%BF%D0%BE%D0%B6%D0%B5%D1%87%D0%BA%D0%B8">Божечки Сапожечки</a></span>,
                                <span><a href="https://godville.net/gods/%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D0%B8%D0%B9%D0%9A74">ВасилийК74</a></span>,
                                <span><a href="https://godville.net/gods/Gengame">Gengame</a></span>, <span><a
                                            href="https://godville.net/gods/Uculumbu">Uculumbu</a></span>, <span><a
                                            href="https://godville.net/gods/General%20Failure">General Failure</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A6%D0%B5%D0%BB%D1%8B%D0%B9%20%D0%A0%D1%8F%D0%B4%20%D0%A4%D1%83%D1%80%D1%8C%D0%B5">Целый Ряд Фурье</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A0%D0%B5%D1%81%D1%83%D1%80%D0%B3%D0%B0%D0%BC">Ресургам</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A0%D0%B8%D1%81%D1%82%D0%BE%D0%BD">Ристон</a></span>,
                                <span><a href="https://godville.net/gods/%D0%94%D0%B5%D0%BC%D0%BE%D1%80%D0%B3">Деморг</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A1%D0%BA%D0%B0%D1%80%D0%B0%D0%B1%D0%B5%D0%B9%D0%BD%D0%B8%D0%BA">Скарабейник</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9B%D0%B0%D0%B4%D0%B0%20%D0%9A%D1%80%D0%B0%D1%84%D1%82">Лада Крафт</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9D%D0%B5%D0%B2%D1%81%D0%B5%D0%BC%D0%BE%D0%B3%D0%B8%D1%83%D1%81">Невсемогиус</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9A%D0%BB%D0%B5%D0%BD%20%D0%94%D0%B0%D1%80%D1%83%D1%8E%D1%89%D0%B8%D0%B9%20%D0%A2%D0%B5%D0%BF%D0%BB%D0%BE">Клен Дарующий Тепло</a></span>,
                                <span><a href="https://godville.net/gods/%D0%90%D1%84%D0%B8%D0%B3%D0%B8%D0%BD%D0%B8%D1%8F">Афигиния</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A2%D0%B8%D0%B0%D1%80%D0%B0%D0%BD">Тиаран</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9C%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D1%80%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D1%8B%20%D0%94%D0%B5%D0%BB%D1%8C%D1%84%D0%B8%D0%BD">Мертворождены Дельфин</a></span>,
                                <span><a href="https://godville.net/gods/%D0%A2%D0%B8%D1%88%D0%B0%D0%BB%D0%BB">Тишалл</a></span>,
                                <span><a href="https://godville.net/gods/%D0%90%D1%81%D0%BA%D1%80%D0%BE%D0%BD%D1%82%D0%B8%D1%8F">Аскронтия</a></span>,
                                <span><a href="https://godville.net/gods/%D0%AE%D0%BD%D0%BE%D0%BD%D0%B0%D0%BD">Юнонан</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9C%D0%B5%D1%81%D0%B0%D0%BD%D1%82%D0%BE%D1%80">Месантор</a></span>,
                                <span><a href="https://godville.net/gods/Mve13">Mve13</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%9D%D0%B0%D1%80%D0%BE%D0%B3">Нарог</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%BA%D0%B2%D0%B0%D1%88%D0%B5%D0%BD%D1%8C%D0%BA%D0%B0">Простоквашенька</a></span>,
                                <span><a href="https://godville.net/gods/Orthodontist">Orthodontist</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%9B%D0%B5%D0%B4%D0%BE%D0%BF%D0%BB%D0%B0%D0%BC%D1%8F">Ледопламя</a></span>,
                                <span><a href="https://godville.net/gods/Anima%20Sola">Anima Sola</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%A1%D0%BE%D0%B7%D0%B2%D0%B5%D0%B7%D0%B4%D0%B8%D0%B5%20%D0%9C%D0%BE%D1%82%D1%8B%D0%BB%D1%8C%D0%BA%D0%B0">Созвездие Мотылька</a></span>,
                                <span><a href="https://godville.net/gods/%D0%91%D1%83%D1%83%D0%B4%D1%83%D0%B1%D0%B0%D0%B1%D0%B0">Буудубаба</a></span>,
                                <span><a href="https://godville.net/gods/Striczh">Striczh</a></span>, <span><a
                                            href="https://godville.net/gods/Angizia">Angizia</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%A4%D0%B0%D1%80%D0%BC%D0%B5%D1%80">Фармер</a></span>,
                                <span><a href="https://godville.net/gods/%D0%92%D0%B0%D0%BD%20%D0%94%D0%B5%D1%80%20%D0%92%D0%B0%D0%B0%D0%BB%D1%8C%D1%81">Ван Дер Ваальс</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9A%D0%BE%D1%80%D0%B6%D0%B8%D1%83%D1%81">Коржиус</a></span>,
                                <span><a href="https://godville.net/gods/Parcells">Parcells</a></span>, <span><a
                                            href="https://godville.net/gods/Bezmolvny">Bezmolvny</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%90%D0%B3%D0%B8%D1%80%D1%8C">Агирь</a></span>,
                                <span><a href="https://godville.net/gods/%D0%9A%D0%B2%D0%B8%D0%B7%D0%BB%D0%B0">Квизла</a></span>,
                                <span><a href="https://godville.net/gods/K1rrra">K1rrra</a></span>, <span><a
                                            href="https://godville.net/gods/Sandibad">Sandibad</a></span>, <span><a
                                            href="https://godville.net/gods/%D0%AD%D0%BD%D1%86%D0%B5%D1%84%D0%B0%D0%BB%D0%BE%D0%B3%D1%80%D0%B0%D1%84">Энцефалограф</a></span>,
                                <span><a href="https://godville.net/gods/%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%B8%D0%B9%20%D0%A2%D0%BE%D1%82%D0%BA%D1%82%D0%BE%D0%BD%D0%B0%D0%B4%D0%B0">Великий Тотктонада</a></span>
                            </p>

                            <p class="cross_footer"><a href="https://godville.net/forums/show_topic/2611?page=last">Обсудить</a>
                            </p>

                        </div>

                    </div>

                </div>

                <div class="narrow_column">
                    <div class="fc clearfix">
                        <h2>Астропрогноз</h2>

                        <p>• Марс в первом доме благоволит хорошо обученным героям. Умения сегодня используются заметно
                            чаще.</p>

                        <p>• Астрологи провозгласили день здоровья. Торговцы уверовали в гороскоп, объявили торговлю
                            лекарствами нерентабельной и отказываются продавать лечебные снадобья.</p>

                    </div>

                    <div class="blog clearfix">

                        <h2><a href="https://godville.net/blog">Демиурги сообщают</a></h2>

                        <p><span>24.03</span> <a href="https://godville.net/blog/post/238">Весенний звон</a></p>

                        <p><span>31.01</span> <a href="https://godville.net/blog/post/237">Жирный тренд</a></p>

                        <p><span>27.12</span> <a href="https://godville.net/blog/post/236">Есть установка</a></p>

                        <p><span>21.11</span> <a href="https://godville.net/blog/post/235">!!!11</a></p>

                        <p><span>31.10</span> <a href="https://godville.net/blog/post/234">Не квестом единым</a></p>

                        <div class="mini_twits">
                            <div class="s_links">
                                Новости помельче из
                                <a href="https://twitter.com/godville" data-lang="ru">
                                    <img src="./Газета Годвилля_files/bird_blue_16.png" alt="Twitter"
                                         style="vertical-align: middle;"></a>
                                и
                                <a href="http://vk.com/ogodville"><img src="./Газета Годвилля_files/vk16.png" alt="VK"
                                                                       style="vertical-align: middle; padding-right: 3px;"></a>
                                :
                            </div>
                            <p>
                                «Апдейт! Весенняя чистка, обезвреживание боссов и далее по списку
                                <a href="https://t.co/e9TjoD3etl" target="_blank">➠</a> »
                            </p>

                        </div>

                    </div>

                    <div class="gpc clearfix">
                        <h2>Праноконденсатор</h2>
                        <p id="gpc_block"></p>
                        <div id="gp_bat" class="battery"
                             style="position: relative; left: 0px; top: 0px; opacity: 1; transform: rotate(0deg);">
                            <div style="width: 10%;"></div>
                            <p id="gpcl"><span id="gpc_val" title="Заряд конденсатора — 10%">10%</span></p>
                        </div>
                        <p>
                            <input id="gp_cap_use" name="commit" type="submit" value="Разрядить">
                            <input id="gp_cap_r" name="commit" style="display:none;" type="submit" value="Обновить">
                        </p>
                        <p id="gpc_err"></p>
                    </div>

                    <div class="news clearfix">
                        <h2>Идейные новости</h2>

                        <p>• С прошлого выпуска газеты в верхнем ящике было замечено 226 сгустков креатива.</p>

                        <p>• Говорят, хирург <a href="https://godville.net/gods/Ddx1">Ddx1</a> не только себя режет без
                            ножа.</p>

                        <p>• <a href="https://godville.net/gods/Shagoy">Shagoy</a> вчера опять сыграл в нижний ящик.</p>

                    </div>

                    <div class="forum clearfix">

                        <h2><a href="https://godville.net/forums/last_posts">Вести с форума</a></h2>

                        <p><span>09:23</span>
                            <a href="https://godville.net/forums/show_topic/21?page=1224">Разные забавные ситуации</a>
                        </p>

                        <p><span>09:01</span>
                            <a href="https://godville.net/forums/show_topic/3592?page=138">Стихи Аримов. (цикл
                                «Ойкумена» Г.Л. Олди)</a>
                        </p>

                        <p><span>08:55</span>
                            <a href="https://godville.net/forums/show_topic/1315?page=90">ДВА ГОДА ПРОШЛО... Верните
                                щщётчик, ироды! И не спрашивай по ком клатцает щщётчик, ибо он клатцает по тебе... </a>
                        </p>

                        <p><span>08:51</span>
                            <a href="https://godville.net/forums/show_topic/2058?page=967">Проект: ассоциации.</a>
                        </p>

                        <p><span>08:45</span>
                            <a href="https://godville.net/forums/show_topic/3589?page=359">Пирожки с чужой начинкой.</a>
                        </p>

                    </div>

                    <div class="news clearfix">
                        <h2>Как бы новости</h2>

                        <p>• Пожертвовав десяток золотых кирпичей, можно быстро освоить умение «невыносимое занудство» в
                            совершенстве. Однако желающих пока не нашлось.</p>

                        <p>• Свидетели сообщают: Некробиолог самостоятельно и с большим успехом сумел отыскать классика
                            в томике.</p>

                        <p>• А знаете ли вы, что нервные клетки Администраторов Годвилля не восстанавливаются?</p>

                    </div>

                    <div class="rate clearfix">
                        <h2>Котировки</h2>

                        <h3>1 золотой кирпич</h3>
                        <p>3127 золотых <span>-2.1%</span></p>

                        <h3>1 инвайт на Годвилль</h3>
                        <p>984 золотых <span>-8.6%</span></p>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="container clearfix">
        <div class="wrapper">
            <div class="columns">
                <div class="wide_column">
                    <p>

                        Подписных индексов нет и не будет.

                        Публикация одобрена народным голосованием.

                        Письма читателей применяются по прямому назначению.

                        Перья заточены, будьте осторожны.

                        Отдельная благодарность — учуевцам и лично биби, за наше счастливое.

                    </p>
                    <p>Связь с редакцией: <a href="mailto:support@godville.net">support@godville.net</a>

                    </p>
                </div>
                <div class="narrow_column">
				<span id="b_logo_img" class="ru">
			</span></div>
            </div>
        </div>
    </div>

</div>

</body>
</html>