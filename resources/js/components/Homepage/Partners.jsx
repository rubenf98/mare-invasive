import React from 'react'
import styled from 'styled-components';
import { Container, Title, Content } from "./style"
import handleScroll from "../Helper/handleScroll";

const StyledContent = styled(Content)`
    h2 {
        font-weight: 400;
        font-size: 40px;
        margin: 40px 0px;
        text-align:center;
    }
    
    p {
        font-weight: lighter;
        width: 80%;
        margin: auto;
        text-align: center;
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
                    <p>DATABASE partners are the barebones that make this platform available for the scientific community.</p>

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