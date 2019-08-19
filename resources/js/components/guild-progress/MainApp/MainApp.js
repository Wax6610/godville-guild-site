import React from "react";
import { BrowserRouter as Router, Route, NavLink } from "react-router-dom";
import TableProgressApp from "../TableProgressApp";
import Top20 from "../top20";
import "./style.css";

function MainApp() {
    return (
        <Router>
            <div>
                <nav>
                    <ul className="navigation">
                        <li>
                            <NavLink
                                className="navigation__item"
                                activeClassName="navigation__item--active"
                                to="/clan-progress"
                            >
                                Таблица прогресса гильдии
                            </NavLink>
                        </li>
                        <li>
                            <NavLink
                                className="navigation__item"
                                activeClassName="navigation__item--active"
                                to="/show-top"
                            >
                                ТОП 10
                            </NavLink>
                        </li>
                    </ul>
                </nav>

                <Route
                    path="/clan-progress"
                    exact
                    component={TableProgressApp}
                />
                <Route path="/show-top" exact component={Top20} />
            </div>
        </Router>
    );
}

export default MainApp;
