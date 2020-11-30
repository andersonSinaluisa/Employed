import React from 'react';

export const SideBar = () => {
    return (
        <aside id="left-panel" className="left-panel">
            <nav className="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" className="main-menu collapse navbar-collapse">
                    <ul className="nav navbar-nav">

                        <li>
                            <a href="#"><i className="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>


                        <li>
                            <a href="#"><i className="#"></i>Menu</a>
                        </li>


                    </ul>
                </div>
            </nav>
        </aside>
    );
}