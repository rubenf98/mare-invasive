import React from 'react'
import { NavLink } from 'react-router-dom';
import styled from 'styled-components';
import { maxWidth } from './dashboardHelper';

const navbarItems = [
    { to: "/dashboard/", title: "Profile" },
    { to: "/dashboard/reports", title: "Reports" },
    { to: "/dashboard/validation", title: "Validation" },
    { to: "/dashboard/users", title: "Users" },
    { to: "/dashboard/debris", title: "Debris" },
    { to: "/dashboard/ecosystems", title: "Ecosystems" },
];

const Container = styled.div`
    width: 100%;
    background-color: #B7DAFB;
    height: 100px;
    display: flex;
    justify-content: space-between;
`;

const Title = styled.div`
    height: 130px;
    background-color: #002548;
    padding: 10px 50px;
    box-sizing: border-box;

    h1 {
        text-align: center;
        width: 100%;
        box-sizing: border-box;
        margin:0px  auto ;
        font-size: 64px;
        color: white;
        font-weight: bold;
    }
`;

const PagesContainer = styled.div`
    margin: auto;
    padding: 0px 20px;
    box-sizing: border-box;
    border-bottom: 1px solid #dddddd;
    display: flex;
    justify-content: space-around;

    .link--active{
        span {
            font-weight: bold;
        }
        
    }
    
`;

const PageContainer = styled(NavLink)`
    font-size: 18px;
    text-decoration: none;
    color: black;

    span {
        margin: 0px 20px;
        transition: all .3s ease;
    }

    &:hover {
        color: black;

        span {
            font-weight: bold;
        }
        
    }
`;


function Navbar() {
    return (
        <Container>
            <Title><h1>Database</h1></Title>
            <PagesContainer>
                {navbarItems.map((item, index) => (
                    <PageContainer
                        className={({ isActive }) => isActive ? "link--active" : undefined}
                        key={index}
                        to={item.to}>
                        <span>{item.title}</span>
                    </PageContainer>
                ))}
            </PagesContainer>
        </Container>
    )
}

export default Navbar
