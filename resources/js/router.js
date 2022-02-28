import React from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import { createBrowserHistory } from "history";

//public pages
import Homepage from "./components/Homepage";
import DashboardLayout from "./components/Dashboard/DashboardLayout";
import Layout from "./components/Layout";
import MapView from "./components/MapView";
import PrivateRoute from "./components/Dashboard/PrivateRoute";

import DashboardHomepage from "./components/Dashboard/Components/Homepage";

import DashboardReports from "./components/Dashboard/Components/Reports";
import Navbar from "./components/Dashboard/Navbar";

export const history = createBrowserHistory();

const Router = () => {
    return (
        <BrowserRouter history={history}>

            <Routes>
                <Route exact path="/map" element={<Layout><MapView /></Layout>} />
                <Route exact path="/" element={<Layout><Homepage /></Layout>} />
                <Route exact path="/dashboard/reports" element={<DashboardLayout><PrivateRoute Component={DashboardReports} /></DashboardLayout>} />
                <Route exact path="/dashboard/" element={<DashboardLayout><PrivateRoute Component={DashboardHomepage} /></DashboardLayout>} />
            </Routes>


        </BrowserRouter >
    );
};

export default Router;
