import { types } from "./types";

export const initialState = {
    data: [],
    meta: {},
    selfData: [],
    selfMeta: {},
    mapData: [],
    loading: false,
    current: {},
    loadingGraph: false,
    dataGraph: [],
    loadingExport: false,
}

export default (state = initialState, action = {}) => {
    switch (action.type) {
        case `${types.FETCH_COLLECTIONS}_PENDING`:
        case `${types.FETCH_COLLECTION}_PENDING`:
        case `${types.CREATE_COLLECTION}_PENDING`:
        case `${types.UPDATE_COLLECTION}_PENDING`:
        case `${types.DELETE_COLLECTION}_PENDING`:
        case `${types.UPDATE_STATE}_PENDING`:
        case `${types.FETCH_SELF_COLLECTIONS}_PENDING`:
        case `${types.FETCH_COLLECTIONS_COORDINATES}_PENDING`:
            return {
                ...state,
                loading: true
            };
        case `${types.FETCH_COLLECTION_GRAPH}_PENDING`:
            return {
                ...state,
                loadingGraph: true
            };
        case `${types.FETCH_COLLECTION_GRAPH}_REJECTED`:
            return {
                ...state,
                loadingGraph: false
            };
        case `${types.FETCH_COLLECTION_GRAPH}_FULFILLED`:
            return {
                ...state,
                loadingGraph: false,
                dataGraph: action.payload.data
            };

        case `${types.ME}_REJECTED`:
        case `${types.FETCH_COLLECTIONS}_REJECTED`:
        case `${types.FETCH_COLLECTION}_REJECTED`:
        case `${types.CREATE_COLLECTION}_REJECTED`:
        case `${types.UPDATE_COLLECTION}_REJECTED`:
        case `${types.DELETE_COLLECTION}_REJECTED`:
        case `${types.UPDATE_STATE}_REJECTED`:
        case `${types.FETCH_SELF_COLLECTIONS}_REJECTED`:
        case `${types.FETCH_COLLECTIONS_COORDINATES}_REJECTED`:
            return {
                ...state,
                loading: false,
            };

        case `${types.UPDATE_STATE}_FULFILLED`:
            return {
                ...state,
                loading: false,
                data: state.data.map((record) =>
                    record.id === action.payload.data.data.id
                        ? action.payload.data.data
                        : record
                )
            };

        case `${types.FETCH_COLLECTIONS_COORDINATES}_FULFILLED`:
            return {
                ...state,
                loading: false,
                mapData: action.payload.data.data,
            };

        case `${types.FETCH_SELF_COLLECTIONS}_FULFILLED`:
            return {
                ...state,
                loading: false,
                selfData: action.payload.data.data,
                selfMeta: action.payload.data.meta
            };

        case `${types.FETCH_COLLECTIONS}_FULFILLED`:
            return {
                ...state,
                loading: false,
                data: action.payload.data.data,
                meta: action.payload.data.meta
            };
        case `${types.FETCH_COLLECTION}_FULFILLED`:
            return {
                ...state,
                loading: false,
                current: {
                    ...action.payload.data.data
                }
            };
        case `${types.DELETE_COLLECTION}_FULFILLED`:
            return {
                ...state,
                loading: false,
                data: state.data.filter(record => record.id !== action.meta.id)
            };

        case `${types.CREATE_COLLECTION}_FULFILLED`:
            return {
                ...state,
                loading: false,
                data: [action.payload.data.data, ...state.data]
            };
        case `${types.SET_CURRENT_STATE}`:
            return {
                ...state,
                loading: false,
                current: action.payload
            };


        case `${types.UPDATE_COLLECTION}_FULFILLED`:
            return {
                ...state,
                loading: false,
                data: state.data.map((record) =>
                    record.id === action.payload.data.data.id
                        ? action.payload.data.data
                        : record
                )
            };
        case `${types.EXPORT_COLLECTION}_PENDING`:
        case `${types.EXPORT_TEMPLATE}_PENDING`:

            return {
                ...state,
                loadingExport: true
            };

        case `${types.EXPORT_COLLECTION}_REJECTED`:
        case `${types.EXPORT_COLLECTION}_FULFILLED`:
        case `${types.EXPORT_TEMPLATE}_REJECTED`:
        case `${types.EXPORT_TEMPLATE}_FULFILLED`:
            return {
                ...state,
                loadingExport: false
            };


        default:
            return state
    }
}