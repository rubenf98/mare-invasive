import React, { useState, useEffect } from "react";
import styled from "styled-components";
import { connect } from "react-redux";
import { fetchDebrisThicknesses } from "../../../../../redux/debrisThickness/actions";
import TableContainer from "./TableContainer";

const ContentContainer = styled.div`
    width: 100%;
    margin: auto;
    

`;

const Container = styled.div`
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
    padding: 50px;
    box-sizing: border-box;
`;

const Table = styled.div`
    width: 100%;
`;


function DebrisThickness({ data, loading, meta, fetchDebrisThicknesses }) {
    const [filters, setFilters] = useState({});

    useEffect(() => {
        fetchDebrisThicknesses();
    }, [])

    function handlePageChange(pagination) {
        fetchDebrisThicknesses(pagination.current, filters);
    }

    return (
        <Container>
            <ContentContainer>
                <Table>
                    <h2>Thickness classes</h2>
                    <TableContainer
                        handlePageChange={handlePageChange}
                        data={data}
                        loading={loading}
                        meta={meta}
                    />
                </Table>
            </ContentContainer>
        </Container>
    )
}

const mapDispatchToProps = (dispatch) => {
    return {
        fetchDebrisThicknesses: (page, filters) => dispatch(fetchDebrisThicknesses(page, filters)),
    };
};

const mapStateToProps = (state) => {
    return {
        loading: state.debrisThickness.loading,
        data: state.debrisThickness.data,
        meta: state.debrisThickness.meta,
    };
};

export default connect(mapStateToProps, mapDispatchToProps)(DebrisThickness);