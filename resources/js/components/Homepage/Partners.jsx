import React from 'react'
import styled from 'styled-components';
import { Container, Title, Content } from "./style"
import handleScroll from "../Helper/handleScroll";
import { dimensions } from '../Dashboard/dashboardHelper';

const StyledContent = styled(Content)`
    h2 {
        margin-top: 30px;
        margin-bottom: 12px;
        font-size: 32px;
        line-height: 40px;
        font-weight: 400;
        text-align: left;
    }
    
    p, li {
        font-weight: lighter;
        font-size: 16px;
        opacity: .8;
    }
    
`;

const Flex = styled.div`
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 50px 0px;
    flex-wrap: wrap;
    
    div {
        width: 50%;
        padding: 40px;
        box-sizing: border-box;

        @media (max-width: ${dimensions.lg}) {
            width: 80%;
            margin: auto;
        }

        @media (max-width: ${dimensions.md}) {
            width: 50%;
            padding: 10px;
        }

        img {
            width: 100%;
        }
    }
`;

function Partners() {
    const scrollParameters = handleScroll("partnerContainer");

    return (
        <Container id="partnerContainer">
            <Title>
                <img style={{ transform: "scale(" + scrollParameters.scale + ")" }} src="/images/homepage/2.jpg" alt="" />
            </Title>
            <StyledContent>
                <div className="content-width">
                    <h2>Our Partners & Supporters</h2>
                    <p>DeNIS partners are the barebones that make this platform available for the scientific community.</p>

                    <Flex>
                        <div><img src="/images/partners/arditi.jpg" alt="ARDITI" /></div>
                        <div><img src="/images/partners/mare.svg" alt="MARE" /></div>
                        <div><img src="/images/partners/ICES.svg" alt="ICES" /></div>
                        <div><img src="/images/partners/wave.png" alt="wave" /></div>
                    </Flex>

                    <p> Want to help? Contact us and we'll work together!</p>
                </div>
            </StyledContent>
        </Container>
    )
}

export default Partners