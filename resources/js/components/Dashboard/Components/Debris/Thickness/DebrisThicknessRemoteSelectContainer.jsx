import { Select } from 'antd';
import React, { useEffect } from 'react'
import { connect } from "react-redux";
import { fetchDebrisThicknessSelector } from "../../../../../redux/debrisThickness/actions";

function DebrisThicknessRemoteSelectContainer({ fetchDebrisThicknessSelector, data, loading, value, onChange }) {
    useEffect(() => {
        fetchDebrisThicknessSelector()
    }, [])


    return (
        <Select
            value={value}
            onChange={onChange}
            loading={loading}
            showSearch
            placeholder="Select the debris stiffness"
            optionFilterProp="name"
            filterOption={(input, option) => option.children.toLowerCase().includes(input.toLowerCase())}
        >
            {data.map((element) => (
                <Select.Option key={element.id} value={element.id}>{element.name}</Select.Option>
            ))}
        </Select>
    )
}

const mapDispatchToProps = (dispatch) => {
    return {
        fetchDebrisThicknessSelector: (filters) => dispatch(fetchDebrisThicknessSelector(filters)),
    };
};

const mapStateToProps = (state) => {
    return {
        data: state.debrisThickness.selector,
        loading: state.debrisThickness.loading,
    };
};

export default connect(mapStateToProps, mapDispatchToProps)(DebrisThicknessRemoteSelectContainer);