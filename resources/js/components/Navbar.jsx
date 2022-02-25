import React from 'react'
import styled from 'styled-components';

const Container = styled.div`
    position: fixed;
    left: 0%;
    top: 0%;
    right: 0%;
    bottom: auto;
    z-index: 990;
    width: 100%;
    text-transform: uppercase;
    color: white;
`;

const Flex = styled.div`
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 48px;

    div {
        width: 50%;

        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        p {
            margin-top: 0px;
            font-size: 18px;
        }

        img {
            width: 35px;
            float: right;
            cursor: pointer;
        }
    }

    
`;

function Navbar() {
    return (
        <Container>
            <Flex>
                <div>
                    <h1>LOREM</h1>
                    <p>Lorem ipsum dolor.</p>

                </div>
                <div>
                    <img src="/images/navbar/login.svg" alt="" />

                </div>
            </Flex>
        </Container>
    )
}

export default Navbar